<?php
// 用这个查询来举例
$uid = 1;
$result=db_query("SELECT nid, created FROM {node} WHERE uid = :uid", array(':uid' => $uid));

// 对象
$record = $result->fetchObject();

// 数组
$record = $result->fetchAssoc();

// 只输出第一条数据
$data = $result->fetchColumn(1); // Grabs the title 只输出第一个from the next row

// Retrieve all records into an indexed array of stdClass objects.
$result->fetchAll();

// Retrieve all records as stdObjects into an associative array
// keyed by the field in the result specified.
// (in this example, the title of the node)
$result->fetchAllAssoc(‘title’);

// Retrieve a 2-column result set as an associative array of field 1 => field 2.
$result->fetchAllKeyed();
// Also good to note that you can specify which two fields to use
// by specifying the column numbers for each field
$result->fetchAllKeyed(0,2); // would be nid => created
$result->fetchAllKeyed(1,0); // would be title => nid

// Retrieve a 1-column result set as one single array.
$result->fetchCol();
// Column number can be specified otherwise defaults to first column
$result->fetchCol($db_column_number);

// Count the number of rows
$result->rowCount();
?>