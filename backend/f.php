<?php
    //Формат текста
    function formatting($text) {
    	$text = stripslashes($text);
    	$text = trim($text);
    	$text = htmlspecialchars($text, ENT_QUOTES);
    	return $text;
    }
    
    function f_date($date)
    {		
    	$date = date("d.m.Y", strtotime($date)); return $date;
    }
    
    //Подсчет всех строк в определенной таблице
    function all_count_table($name_table) {
        global $db;        
        $result = mysqli_query($db, "SELECT * FROM $name_table");
        $all_count_table = mysqli_num_rows($result);
        return $all_count_table;
    }
    
    //Подсчет определенных строк в таблице
    function line_count_table($table, $column, $znak, $value) {
        global $db;        
        $result = mysqli_query($db, "SELECT * FROM $table WHERE $column $znak '{$value}'");
        $line_count_table = mysqli_num_rows($result);
        return $line_count_table;
    }
    
    //Поиск по справочнику
    function request_book_name_local($table, $id_item){
        global $db;
    	$id_item = (int)$id_item;
        $result = mysqli_query($db, "SELECT * FROM $table WHERE id = '{$id_item}'");
        if (mysqli_num_rows($result) > 0){$row = mysqli_fetch_array($result); $request_book_name_local = $row['name'];} else {$request_book_name_local = '&mdash;';}
    	return $request_book_name_local;
    }

    //резка текста
	function cropStr($text, $size){  
		$text = substr($text, 0, $size); //обрежем его на определённое количество символов 
		$text = rtrim($text, "!,.-"); //убедимся, что текст не заканчивается восклицательным знаком, запятой, точкой или тире 
		$text = substr($text, 0, strrpos($text, ' ')); //находим последний пробел, устраняем его и ставим троеточие 
		return $text.' ...'; 
  }

      //Поиск по справочнику по субимени
      function request_book_subname_local($table, $id_item){
        global $db;
    	$id_item = (int)$id_item;
        $result = mysqli_query($db, "SELECT * FROM $table WHERE id = '{$id_item}'");
        if (mysqli_num_rows($result) > 0){$row = mysqli_fetch_array($result); $request_book_name_local = $row['subName'];} else {$request_book_name_local = '&mdash;';}
    	return $request_book_name_local;
    }