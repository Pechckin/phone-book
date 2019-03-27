
        <?
            
              $db = mysqli_connect("localhost","127.0.0.1","","test");
              if($db);
        else die("Ошибка  подключения к  сервиру баз данных.");
        
        $selected = mysqli_select_db($db,"test");
        if( $selected);
        else die("<br>База данных не найдена или отсутствует доступ.");
        
        mysqli_query($db,"SET NAMES 'utf-8'" );
        mysqli_query($db,"SET CHARACTER SET 'utf-8'" );
        
        
       $create =  mysqli_query($db,"CREATE TABLE IF NOT EXISTS `phone_book` (
			`surname` varchar(255) NOT NULL DEFAULT '',
			`name` varchar(255),
            `phone` varchar(255),
			PRIMARY KEY (`phone`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=2 ;");
        if ($create);
        else die('<p>Ошибка при создании.</p>');
        
        ?>
        
