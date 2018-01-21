<?php

$server = 'localhost';
$user = 'root';
$pass = 'root';
$mydb = 'job_master';
$table_name = 'jobs';

session_start();
if (!isset($_SESSION['created'])){
    $_SESSION['created'] = false;
}

if (isset($_GET['add'])){
    
    if (!$_SESSION['created']){
        $connect = mysqli_connect($server, $user, $pass, $mydb);
        if (!$connect) {
            print("can't connect");
            die("Cannot connect to $server using $user");
        }
        else {
            $SQLcmd = "CREATE TABLE jobs (
                         job_code INT(6),
                         company_name VARCHAR(100) NOT NULL,
                         designation VARCHAR(50) NOT NULL,
                         salary float NOT NULL,
                         interview_date varchar(20) not null,
                         vacancies int not null
                         )";
            mysqli_select_db($connect, $mydb);
            if (mysqli_query($connect, $SQLcmd)){
                print "Insert was successful!";
            } else {
                die ("Table Insertion Failed SQLcmd=$SQLcmd");
            }
        }
        mysqli_close($connect);
        
        $_SESSION['created'] = true;
    }
    
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        $SQLcmd = "insert into {$table_name}
        values({$_GET['jobCode']},\"{$_GET['companyName']}\",\"{$_GET['designation']}\",{$_GET['salary']},{$_GET['dateInterview']},{$_GET['vacancy']})" ;
        
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
                    <th style='border:2px solid black'>Job Code</th>
                    <th style='border:2px solid black'>Company Name</th>
                    <th style='border:2px solid black'>Designation</th>
                    <th style='border:2px solid black'>Salary</th>
                    <th style='border:2px solid black'>Interview Date</th>
                    <th style='border:2px solid black'>Vacancies</th>
                </tr>";
        while ($row = mysqli_fetch_row($results)){
            echo "<tr>";
            foreach ($row as $field) {
                echo "<td style='border:1px solid black'>". $field ."</td>";
            }
            echo "<td style='border:1px solid red'><form action='job_master.php'><button name='delete' value='". $row[0] ."'>DELETE</button></form></td>";
            echo "<td style='border:1px solid red'><form action='job_master.php'><button name='updateShow'>UPDATE</button>
                <input type='hidden' name='jobCodeUpdate' value='". $row[0] ."' />
                <input type='hidden' name='companyNameUpdate' value='". $row[1] ."' />
                <input type='hidden' name='designationUpdate' value='". $row[2] ."' />
                <input type='hidden' name='SalaryUpdate' value='". $row[3] ."' />
                <input type='hidden' name='dateInterviewUpdate' value='". $row[4] ."' />
                <input type='hidden' name='VacancyUpdate' value='". $row[5] ."' />
            </form></td>";
            echo "</tr>";
        }
        echo "</table>";
        /* else {
         die ("Table Select Failed SQLcmd=$SQLcmd");
         } */
    }
    mysqli_close($connect);
}

if (isset($_GET['delete'])){
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        $SQLcmd = "delete from {$table_name} where job_code = {$_GET['delete']}";
        mysqli_select_db($connect, $mydb);
        if (mysqli_query($connect, $SQLcmd)){
            print "Record Deleted!";
        } else {
            die ("Table Insertion Failed SQLcmd=$SQLcmd");
        }
    }
    mysqli_close($connect);
}

if (isset($_GET['update'])){
    $connect = mysqli_connect($server, $user, $pass, $mydb);
    if (!$connect) {
        print("can't connect");
        die("Cannot connect to $server using $user");
    }
    else {
        $SQLcmd = "update {$table_name}
        set company_name=\"{$_GET['companyName']}\",designation=\"{$_GET['designation']}\",salary={$_GET['salary']},interview_date=". (string)$_GET['dateInterview'] .",vacancies={$_GET['vacancy']}
        where job_code={$_GET['jobCode']}";
        
        mysqli_select_db($connect, $mydb);
        if (mysqli_query($connect, $SQLcmd)){
            print "Update was successful!";
        } else {
            die ("Table Update Failed SQLcmd=$SQLcmd");
        }
    }
    mysqli_close($connect);
}

include "job_master.html";

 
?>