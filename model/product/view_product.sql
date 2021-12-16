CREATE VIEW view_product AS 
SELECT product.*,
ROUND(

	IF(discount_percentage IS NULL || 
		discount_from_date > CURRENT_DATE || 
		discount_to_date < CURRENT_DATE , 
		price, 
	price * (1-discount_percentage/100))
	, -3) AS sale_price 
FROM product;


-- Áo: 385000
-- Giảm 15% => bán bao nhiêu?. 327250 làm tròn 327000

-- Cụ thể: 327250 chia 1000 sẽ ra 327,250 làm tròn 327
-- Sau đó x 1000 sẽ ra 327000

-- round(327250, -3) => 327000
-- round(15.2756, 3) => 15.276