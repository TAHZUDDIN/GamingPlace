
1. I am using codeigniter framework
2.Create a database 'gamingplace'
3. go to database.php in application/config folder and set name of database name password etc.
4. go to  application/config/config.php and edit base_url as you have
5. create table 'products' with id(int)11 primaykey autoincrement , category_id   (int)11 , title(VARCHAR)255, description(TEXT), image(VARCHAR)100, price(DECIMAL)10.2

6. create table 'categories' with id(int)11, name(VARCHAR)100
7. create table 'orders' with id(int)11 primarykey auto increment, product_id(int)11,
    user_id(int)11, transaction_id(VARCHAR)255, qty(int)11, price(DECIMAL)10.2,
    address(VARCHAR)255, address2(VARCHAR)255, city(VARCHAR)100, state(VARCHAR)100,
    zipcode(VARCHAR)30,


8. create table 'users' with id(int)11 primarykey auto increment,  first_name     (VARCHAR)100,last_name(VARCHAR)100, email(VARCHAR)100,username(VARCHAR)100,
   password(VARCHAR)100, join_date(TIMESTAMP)100, CURRENT_TIMESTAMP