LOAD DATA INFILE 'entregan.csv' 
INTO TABLE lab11.entregan
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(Clave,RFC,Numero,@Fecha,Cantidad)
SET Fecha = STR_TO_DATE(@Fecha, '%d/%m/%T')