<?php

//connecting to the database
$conn=mysqli_connect("localhost","root","","Test_db");
//create a db
$sql="CREATE DATABASE Test_db";
$result=mysqli_query($conn,$sql);

//create table
$sql="CREATE TABLE `st_table` ( `username` VARCHAR(55) NOT NULL ,  `email` VARCHAR(55) NOT NULL ,  `password` VARCHAR(55) NOT NULL , `cpassword` VARCHAR(55) NOT NULL,  `mobile` INT(55) NOT NULL ,  `rollno` INT(55) NOT NULL ,  `course` VARCHAR(55) NOT NULL ,  `gender` VARCHAR(55) NOT NULL )";
$result=mysqli_query($conn,$sql);


//create Admin table
$sql="CREATE TABLE `Admin_table` ( `username` VARCHAR(55) NOT NULL ,  `password` VARCHAR(55) NOT NULL)";
$result=mysqli_query($conn,$sql);



 //create add student table
$sql="CREATE TABLE `add_student` ( `username` VARCHAR(55) NOT NULL ,  `email` VARCHAR(55) NOT NULL , `mobile` INT(55) NOT NULL ,  `rollno` INT(55) NOT NULL ,  `course` VARCHAR(55) NOT NULL ,  `semester` INT(55) NOT NULL )";
$result=mysqli_query($conn,$sql);

 //create add teacher table
$sql="CREATE TABLE `add_teacher` ( `username` VARCHAR(55) NOT NULL ,  `email` VARCHAR(55) NOT NULL , `mobile` INT(55) NOT NULL ,  `id` INT(55) NOT NULL)";
$result=mysqli_query($conn,$sql);


//create Result table
$sql="CREATE TABLE `result` ( `subject` VARCHAR(55) NOT NULL ,`studentname` VARCHAR(55) NOT NULL , `rollno` INT(55) NOT NULL ,`semester` VARCHAR(55) NOT NULL ,  `marks` INT(55) NOT NULL)";
$result=mysqli_query($conn,$sql);
 ?>
