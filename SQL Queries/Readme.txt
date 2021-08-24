
PROBLEM:

In the design given to us ,the name of the instructor and all his/her degrees are in one table which is inconvenient. There are no primary keys for 
instructors neither for degrees.


MY SOLUTION:

So I divided the one table to 5 tables.Table for instructors which contains the first name and last name and the id .
The  FULL DEGREE of each instructor contains several attributes : the degree (masters or bachelor ...) so i made a table for degrees
and university (AUB ,LAU ...)so i made a table for universities , the major ( computer science , math..) so i made a table for majors,
and the year , so i made a table for full_degree containing instructor id since the relation between instructors and full_degrees is
one to many(every instructor may has more than one degree) and the full_degrees contains also year,major_id,degree_id and university_id.
It is better to make separate tables for each attribute in the full degree in real life inorder to ensure that the data for the full degree is convenient.
