```mysql
SELECT 
  YEAR(CURRENT_TIMESTAMP) - YEAR(birthday) - (RIGHT(CURRENT_TIMESTAMP, 5) < RIGHT(birthday, 5)) as age 
FROM YOUR_TABLE
```