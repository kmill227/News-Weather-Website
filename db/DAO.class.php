<!--- Robin Oster --->
<?php
require_once('config.php');
try{
    $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
}
catch (PDOException $e){
    echo $e->getMessage();
}

class GlobalTrendsDAO{
    function getPopularRecent(){
        $sql = "SELECT * from globaltrends ORDER BY TotalSearches DESC";
        $stmt = $GLOBALS['pdo']->prepare($sql);
		$stmt->execute();
        return $stmt;
    }

    function addTrend($searchString){
        $date = date('Y-m-d H:i:s');
        $sql = "SELECT * from globaltrends where GlobalTrend like :searchString order by TotalSearches DESC";
        $stmt = $GLOBALS['pdo']->prepare($sql);
        $stmt->bindParam(':searchString', $searchString, PDO::PARAM_STR);
		$stmt->execute();
        if($stmt->fetch()){
            $sql = "UPDATE globaltrends SET TotalSearches= TotalSearches + 1 WHERE (GlobalTrend = :searchString)";
            $stmt = $GLOBALS['pdo']->prepare($sql);
            $stmt->bindParam(':searchString', $searchString, PDO::PARAM_STR);
            $stmt->execute();

            $sql = "UPDATE globaltrends SET LatestTime = :thisDate WHERE (GlobalTrend = :searchString)";
            $stmt = $GLOBALS['pdo']->prepare($sql);
            $stmt->bindParam(':thisDate', $date, PDO::PARAM_STR);
            $stmt->bindParam(':searchString', $searchString, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt;
        }
        else{
            $sql = "INSERT INTO globaltrends(`GlobalTrend`, `TotalSearches`, `LatestTime`) VALUES (:searchString, '1', :thisDate)";
            $stmt = $GLOBALS['pdo']->prepare($sql);
            $stmt->bindParam(':thisDate', $date, PDO::PARAM_STR);
            $stmt->bindParam(':searchString', $searchString, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt;
        }
    }

    function getBySearch($searchString){
        $sql = "UPDATE * from globaltrends SET TotalSearches = TotalSearches + 1 WHERE GlobalTrend like :searchString";
        $stmt = $GLOBALS['pdo']->prepare($sql);
        $stmt->bindParam(":searchString", $searchString, PDO::PARAM_STR);
        $stmt->execute();

        $sql = "SELECT * from globaltrends where GlobalTrend like :searchString order by TotalSearches DESC";
		$stmt = $GLOBALS['pdo']->prepare($sql);
        $stmt->bindParam(':searchString', $searchString, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt;
    }


}


?>