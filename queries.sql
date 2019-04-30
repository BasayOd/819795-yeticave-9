USE yeticave;
INSERT INTO categories
(name, icon) VALUES ('Доски и лыжи', 'boards'),('Крепления', 'attachment'),
                   ('Ботинки', 'boots'), ('Одежда', 'clothing'), ('Инструменты', 'tools'), ('Разное', 'other');

INSERT INTO users
(email, name, password, avatar, contact) VALUES  ('basay1980@gmail.com', 'Basay', '198045gh', 'url/urk/lrt', 'привет'),
                                                 ('basay1981@gmail.com', 'Basay1', '198045gh', 'url/urk/lrt', 'привет'),
                                                 ('basay1982@gmail.com', 'Basay2', '198045gh', 'url/urk/lrt', 'привет'),
                                                 ('basay1983@gmail.com', 'Basay3', '198045gh', 'url/urk/lrt', 'привет');



INSERT  INTO lots (name, category_id, price, img, user_id, dt_end, bet_step,winner_id) VALUES
                                               ('2014 Rossignol District Snowboard','1','10999','img/lot-1.jpg','1', '2019-05-05', '500', '3' ),
                                               ('DC Ply Mens 2016/2017 Snowboard', '1', '159999', 'img/lot-2.jpg','2', '2019-05-05','500', '0'),
                                               ('Крепления Union Contact Pro 2015 года размер L/XL',
                                                '2','8000','img/lot-3.jpg','2', '2019-05-05','500', '0'),
                                               ('Ботинки для сноуборда DC Mutiny Charocal', '3','10999','img/lot-4.jpg','3', '2019-05-05','500','0'),
                                               ('Куртка для сноуборда DC Mutiny Charocal','4','7500','img/lot-5.jpg','1', '2019-05-05','500','0'),
                                               ('Маска Oakley Canopy', '6','5400','img/lot-6.jpg', '2', '2019-05-05','500','0');


INSERT INTO bets
( amount, user_id, lot_id)VALUES ('12000', '2', '1');


INSERT INTO bets
( amount, user_id, lot_id)VALUES ('12500','1', '1');


INSERT INTO bets
( amount, user_id, lot_id)VALUES ('13500', '3', '1');



 SELECT * FROM categories;

 SELECT l.name, l.price, l.img, b.amount, c.name FROM lots l 
 LEFT JOIN bets b ON b.user_id=l.winner_id
 JOIN categories c ON l.category_id=c.id WHERE l.dt_end>CURRENT_TIMESTAMP;
 
 SELECT * FROM lots
 LEFT JOIN categories c ON lots.category_id=c.id WHERE lots.id='2';

UPDATE lots SET name="новое имя лота" WHERE id='2';

SELECT * FROM bets WHERE lot_id='1' ORDER BY amount;


