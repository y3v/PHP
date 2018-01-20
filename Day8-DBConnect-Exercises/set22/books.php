<?php



if (isset($_GET['add'])){
    $server = 'localhost';
    $user = 'root';
    $pass = 'root';
    $mydb = 'book_master';
    $table_name = 'books';
    
    $connect = mysqli_connect($server, $user, $pass, $mydb); 
    if (!$connect) { 
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        $SQLcmd = "insert into {$table_name} 
        values({$_GET['bkCode']},{$_GET['bkName']},{$_GET['authorName']},{$_GET['cost']},{$_GET['isbn']})" ;
        
        echo "here!";
        mysqli_select_db($connect, $mydb); 
        if (mysqli_query($connect, $SQLcmd)){
            print "Insert was successful!";
        } else { 
            die ("Table Insertion Failed SQLcmd=$SQLcmd"); 
        }
    }
    mysql_close($connect);
}

include "books.html";