<?php

$server = 'localhost';
$user = 'root';
$pass = 'root';
$mydb = 'book_master';
$table_name = 'books';

if (isset($_GET['add'])){
    
    $connect = mysqli_connect($server, $user, $pass, $mydb); 
    if (!$connect) { 
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        $SQLcmd = "insert into {$table_name} 
        values({$_GET['bkCode']},\"{$_GET['bkName']}\",\"{$_GET['authorName']}\",{$_GET['cost']},{$_GET['isbn']})" ;
       
        mysqli_select_db($connect, $mydb); 
        if (mysqli_query($connect, $SQLcmd)){
            print "Insert was successful!";
        } else { 
            die ("Table Insertion Failed SQLcmd=$SQLcmd"); 
        }
    }
    mysqli_close($connect);
}

if (isset($_GET['show'])){
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        $SQLcmd = "select * from {$table_name}" ;
        
        mysqli_select_db($connect, $mydb);
        $results = mysqli_query($connect, $SQLcmd);
        echo "<table>
                <tr>
                    <th style='border:2px solid black'>Book Code</th>
                    <th style='border:2px solid black'>Book Name</th>
                    <th style='border:2px solid black'>Author</th>
                    <th style='border:2px solid black'>Price</th>
                    <th style='border:2px solid black'>ISBN</th>
                </tr>";
        while ($row = mysqli_fetch_row($results)){
            echo "<tr>";
            foreach ($row as $field) {
                echo "<td style='border:1px solid black'>". $field ."</td>";
            }
            echo "</tr>";
        } 
        echo "</table>";
        /* else {
            die ("Table Select Failed SQLcmd=$SQLcmd");
        } */
    }
    mysqli_close($connect);
}

include "books.html";