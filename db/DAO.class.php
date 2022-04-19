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
        $sql = "SELECT GlobalTrend from globaltrends ORDER BY TotalSearches DESC";
        $stmt = $GLOBALS['pdo']->prepare($sql);
		$stmt->execute();
        return $stmt;
    }

    function addTrend($searchString){
        $date = date('Y-m-d H:i:s');
        $sql = "select * from globaltrends where GlobalTrend like :searchString order by TotalSearches DESC";
        $stmt = $GLOBALS['pdo']->prepare($sql);
        $stmt->bindParam(':searchString', $searchString, PDO::PARAM_STR);
		$stmt->execute();
        if($row = $stmt->fetch()){
            $sql = "UPDATE `globaltrends` SET TotalSearches='TotalSearches' + 1,`LatestTime`= :thisDate WHERE 'GlobalTrend' = :searchString";
            $stmt = $GLOBALS['pdo']->prepare($sql);
            $stmt->bindParam(':thisDate', $date, PDO::PARAM_STR);
            $stmt->bindParam(':searchString', $searchString, PDO::PARAM_STR);
            $stmt->execute();
            echo "beep";
            return $stmt;
        }
        else{
            $sql = "INSERT INTO globaltrends(`GlobalTrend`, `TotalSearches`, `LatestTime`) VALUES (:searchString, '1', :thisDate)";
            $stmt = $GLOBALS['pdo']->prepare($sql);
            $stmt->bindParam(':thisDate', $date, PDO::PARAM_STR);
            $stmt->bindParam(':searchString', $searchString, PDO::PARAM_STR);
            $stmt->execute();
            echo "boop";
            return $stmt;
        }
    }

    function getBySearch($searchString){
        $sql = "select * from travelpost where Title like \"%" . $searchString . "%\" order by TotalSearches DESC";
		$stmt = $GLOBALS['pdo']->prepare($sql);
		$stmt->execute();
		return $stmt;
    }

}


?>