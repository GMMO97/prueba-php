####### SISTEMA DE INVENTARIO Y VENTA #######

1.En la raiz del proyecto encontrara un archivo .sql con el nombre prueb-php que pertenece a la base de datos (MYSQL)

1. CONSULTA NUMERO #1

SELECT id,name,reference,price,weight,category,date,MAX(stock) as stock FROM inventory

2. CONSULTA NUMERO #2

SELECT id,id_product,name,SUM(count_sale) as venta FROM sales GROUP by id_product ORDER BY venta DESC LIMIT 1

