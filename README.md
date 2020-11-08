<p>
Project: The project is about filtering the customers based on the orders placed. The project is finished by using Eloquent (Laravel MVC Framework) also using MySQL, JavaScript, JQuery, Html, CSS, Bootstrap.

Filters: On the basis of requirements the filters separate entries from order table highlighting active customers and removed customers. The details are as below:

Removed Customers:
Red:  the entries highlighted with red colors are removed customers. 

Active customers order details:
Green: The entries highlighted with green color are active customers who have placed orders worth RM200.00 within last 3 months and the status of the order is completed.

Orange: Entries highlighted with orange filters are active customers but, they have not placed any orders within last 12 months.

Total orders by the customer are displayed into table.

Program Description:

There are three tables:
1)	CustomerStatus Table
2)	Customer Table
3)	Order Table

Modules:
1)	Customer Status: create new status and view status
2)	Customer List: view all customers
3)	Order Details: view customers order Details

Description:
•	Customer is able to order multiple time.
•	The system will display result of active customers and completed orders. 
•	In the order table for any customers have more than one order so that time system easily handle the calculation of amount and only consider ‘Completed’ order and sum of all amount and then after filtering are apply.
•	For day calculation the system will consider minimum date to apply filtering for single and multiple orders. i.e. one of the customer are multiple entry but the date is different and one order is placed before 3 months and one is new at that time system will consider older date. 
•	Easily view details order by customer which are complete or pending, date of order, and amount of order.</p>