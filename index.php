<?php
require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/category.php";
require_once __DIR__ . "/models/food.php";



$dog_category = new Category();
$dog_category->setName("cane");

$cat_category = new Category();
$cat_category->setName("gatto");

$product1 = new Product('K9', 'Pettorina', 20, 50, $dog_category);
$product1->setDescription('pettorina per cane');
$product1->setPoster('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhAWFRUXFhYVGBUXFRgVFRcVGBcYFxYYGRUYHSggGRolHRgVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OFxAQFSsdHR0tKy0rKy0tLS0rLSsvLSstLSstLS0tLSstKystNy0tLSstKzcrKysrLSstKysrLSsrK//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAAAQMEBQYHCAL/xABGEAACAQIDBAYHBgMFBwUAAAABAgADEQQSIQUxQVEGBxMiYXEygZGhsdHwFCNCUmLBM3LhCBUkkrJDRFNjc4LCJTQ1ovH/xAAYAQEBAQEBAAAAAAAAAAAAAAAAAQMCBP/EAB8RAQEBAQACAgMBAAAAAAAAAAABAhEDMRIhMkFRE//aAAwDAQACEQMRAD8A7jERAREQEREBESIExEiBMREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBEiTARKeIrqil3YKqi5ZiAoA3kk7hNC211v7NoXFNnrsOFNbL/newI8rwOgxOCbT68sUx+4w1GmP156zW9RQD2GW2G64dqOO79lJHOi9/YKkD0JE8+N1sbWO44ceVBt/I3c/Rl/0e62catYfbBTqUSbNlp9m6DmupBtyO/nA7pExWzukWEruaVHE03qBQ2QN38p3NlOpGo1mVgIiICIiAiIgIiICIiAiIgIiICIiAiIgRJkRAmIiBxr+0TtWoqYbDKxCPnquB+IoVCA+AJJ8wOU4bczvH9obZ2ajha4HoO9I8hnAZb+tCPXOG5Pq0DoPVF0Ew+0xiHxJqBaTU1UIwS5IYtc2PADlvnT9odVez0wtZMLhgtYqSlRi1Rw4sQAWNwDa1vEzUf7PW0EQ4ykzBdKVW5IAt31Op819s6ZtDp1s2iStTHUQwF7Bwxt5LfXwgecGa/C1xx338jb4ndxk5/eL8d48wRyl9t6rRfE13w7ZqLVXdG11VmJPd32uWGo4TG9pb1HhYHX2GQb70QoLWr7LqUKaitQrVu3qLYFqJKhQ1t5Ku4HhTblO7zjvUniqY7ftHVcpplcxsSWDoO82+wuAP1mdQxnSDCUf4uKo07/AJ6ir8TAyUmaljesnZVI2bGq3/TSpV99NSJlthdJsHjQThsSlXLa6g2db7ro1mF/KUZeJF5MBERAREQEREBERAREQESJMBEiTASJMiAmn9ZHTdNmUVKgPXqXFNCdAB6TtbXKLgabyR4226tUCqWYgKASSdAABck+E8q9YHSI7QxtStc5PQpjlSX0fWdWPi0B0i6dY3GjLiK5ZL37MBUp3G7QDW3iTMVhArg6C44WuLeRmNqG/lK+yjlqDxuD+3vtCNqq7MpMEYUxkqru4LUT0l8BuNvZMbtLYqohZARbeOFpl8A4NCoul6bpWXUgkXyvYXsRa55i8yGJpgqdNCJj5Lc6lbYnY0eg5VSL3323fAytmY8yNOdv3EqUkysynhu1I0+HLfPtaS8gNCL6E+6xmvtkqYOi7HLTC59eCHx4/GXWB6OVHY3Ts7ekT+1t8o4TE5GDXGltxJ4+OvEzoODdKiqcy5iN1xf2THy6ufTvOZWHwPRyggvkznm2vu3S06VYUKtNwLZXALDRgrCxsw1HA+oTaKiZAWO4Ak+rUzUNu4011tlyqLka3v5zHFt1Ku7JOOhdS/S2rVapgMTUNRqal6TsczlAcroWOpsSpBOtmPKdXnm/qxrsu18K27OXB8Q9Bzx/VlM9IT2syTIkwEREBERAREQEREBERAREQEi8Gc460OsNcGrYbDMDiSLMw1FEEb/+pyHDeeAIY3rq6aLTpHA0Xu7/AMYj8Cf8O/5m4jl5zhJ95latULEsxJJJOpuSTqSSd+st2MI+TPqgbMp/UPjPiVMMl3UfqHxlG4bH1NZedCpewzbrHdw/m4TLYa5pKeaj4TGbHH8ZuAouN5GpsOAPPcbDmZmcLTtTUfpHwmHn9Rt4v21fbFDJUDcDofr63S27LkPLQHdNi2zhMyHnvE15HBW5Oo8NeXwl8Wuzjnc5X0g5ee8evQzMbGqb15aiYlmA9ulrnhc7x9aS92OV7ZQbgEgHcDY/Xul8k7lMXlZjF4uu4ys1xyFhfztvlni6QWk2mtj/AEm5Vtj0juuDzvf4zAbawBQoGIKlxc7tAC58tFM82b2yO/jJ2qXQfDZtr4ZR+B+FxYU6TXv/AJZ6JnEepXCdpjqtbhTpNz9Kowtv8A87fPayIkSYCIiAiIgIiICRJiBEmRBgJDMALk2A4yx2ntmhh6bVatZVRBcm4J8gBqTfS04H096yK+OJo0r0sP8AkB7z+NRh/pGnnA3DrC61FQNh8A4LbmxA1C8xS/Mf1buV984rXcklmJJJvqbkk7yTvJny1S3iefASgzQiH53lO0+jIgfNpfbIpXfN+Ue86D95ZTYtlYE2WmB33IHrOgEDMYZSmGY6/fOEHpi6pq27utY+ZHIbzejaH6R7ZbY+2cU19GkOzv3tW/Ge9qNb6WG/cN0gUWIuB75lvl9tM9/RWxbHjbymBNJSWve9zcgkX47h5zYfsenePs4TAYylldgL62P17JMWd5DUvO1QagvHXzJ+cq4QqjqwUaMDcDkRxtKGUnj8f2tKiL4/Xtmt+3DptHbata6kKba399uUxvTN7Kvk/AH8BHHzmO2c+amp8BK23r1MKp4o2U+RBVd/iV18J48fW431+LeuojDAYavV4tWCepEUge12nTZynqF2gDSxGHJ7yutUDwZcp9hQe2dWntYJiRJgIiICIkQJkTn/AE7608Ns9moU1+0Ykb0U2RD/AMx9df0i552nFeknT/aONJFXEFKZ/wBjRJppbkbG7f8AcTA9GbY6Z7PwpK18bSVhvQNnf/Il2901DaPXbs9CRSp16x5qgRfa5B9089qANwn3eB1rafXpiDcUMDTTk1WoznzKqF+M0zafWTtKu4ariboGVuxRQlJsrBgrBbFlJGtzrNVqGfdLDv3XKEJfRiLAm2YW56WMIy20drV638WoWO+2iol+CooAX1CYqpUtoJ9lpRc6wPktIvPq0+wBApXkSoZUwtDOwUeZPISi52ThbnO24bvE/ITasATSU1LDO4KU+9qAfSYgajTQXIuDuYGWWCoLx0poLnQkG3DQjf4kb+ZEvUZqjZiLaZVXgqDcBoAOJNgNbzm3iydKNL8I+uZmQGgA5CU6dl7txcnUk2+hMzg6dJRe4Y/m0Iv4cp5N663zOMXeYDa4s4PMH2g6fGbviNrUV0Yr5WufYJr3Sf79U7FdQxvplFiPH1S+Lvy9JuzjWWI+rfvJB+tflKq7GrHfURfWWPsFpcU9gDeajHyVV/1XM9bFktj4gdlqdxI0k18YSCo0DAgjnf60lClgwgsASN+rfKZBNkVQna/Z27Pfn7Jstuec6euY/wCX31bq2cW3Rfa9TZ+MTEKpZbtTrU1H4TbOBbTgGHlwno/AYxK1NKtNgyOoZWG4qRcTz9jtnVaIRqilQ1rXI48CBu8jNk6o+krUa/8Ad9Vh2TljRN/RqXJZL8msdOY/VNkdkkyJMBERATBdOcdUobPxVWk2WotFyjcmIsD5i95nZq3Wgf8A0vFW/IPZnW8DyqSdSxJYk5idTe/E8zPqhSZzlRSx5ATI4iip+ciuajKEUhUH4EAUE2CljbUsQBcm8CF2Yq/x66U9Vuq/e1BcsG7q6AjLqCeIkrVwqf7KrVPd9NxTW4JzgBLnKRYC5uNZYnDOPwn2TLbH6K4zFfwaPd/O7pSQC9r3ci9td1zpCLRtrlf4VGlTtuYJmfR847z31Gg8hLH7Szvd3LG1tST6hyE6tsTqWzWbGbQpIN5SiVZuOnaPoOH4TxnRNn9E9i4Si9JRQAqIyO9SqpqMrAqfvGN10PC0HHmZjPgb5n+lPR37JiGp0q9PEU9SlSk6v3eThT3H58DvHhivsjflt6wIFvmkS6XBHiR7b/CVFwa8Sfhy+cCxmXwKimn6msT5cB9c5RXDIPw+0xiXtr4X+BgbT9mNqaFe4Dnfvem9rWtwHj587D7qhm0FRVHJVvLno+tKrUpis+RDlzPvyi1iRv5e+dBr9EsOtfAikzPSrlixY+kqp2gtYCwK3nNzL7dTVjlv90qdWNRjzLZf6y6oYBU9FAo8yb89TOq7NwGHqYjaGGShTGVAqd0Er3CrEMdb5iDMZ01+8wGBr21yhD5sgv70M65E61VOj2IzUkNMqa2lO4Cht2vgNRMkehlRUxLNUTNhgCygs1+5nFibAaH3TdNn1FqUdl1j+FzSv4mk6D/7Ivtnzg9n11r7UFSm3Z1kJRvwt3WAAPOzD2QNc270WwuCw96mIbt2W6KE+7Yi1wLA+VyRwmL6BU6VXG06dVFdGDizC4zBSw09U2/YGHepszLtJ6TUTTD0qme9QKVutyR6S6Wtc8DNe2f0urGrhhVpolKm6vanTINgrIW3m+hbdCMz0swAwmznRKYPaYhs7ACyoXYqpPAWVFt5zZtlbRp4tlejiENHsitTDFVzAncTxFvRtumqY7pSlKri6FWg9ShVIYU2srKWRc442BOvMGa3hullXD4ZsNRCoCW+8t95lPC40vv1+EDGdJ9rPUzUiQVpuwUi9yFZspJv4k6W1YmamcSyVyVNmUpWptxDDKdPWL+qX9WqLHWYnEsDVpEflynfwBvoNToTulo9T7A2kMThqOIXdUpq9uRI1HqNxMhNJ6nnY7Ko34NVA8u1a37zdpFIiICa91g//G4slcwFFmKnS4XvEXHgJsMtNr4MVqFWif8AaU3T/MpX94HlnG4HumpSJenz/GnhUUbrC2vo675a0DLislbDVWRs1OrTbIw3EEEGxHFToeRFjxlZcdTe/a0BmP46ZyG5fMzFdVYkEjgBpApi1vrlPmoBy+tflMiKGGY92u6DPaz08xFO3pEodTewsBxvPj7FSNv8WgzO6m6P3VAfLUOm5u7oNRm13GBiyv17flKbfP8Af5TK/wB30jb/ABdMXdk9F+6oz2c6aqe7u17wnydn0T/via1CnoObLdrVN2qm4036wMWfM/V/lIP17/6TKHBYUXvjCe+FstFtUvq4JP6vR3yCMEL2au/fWxsiK1Pu5ib3IfVrcN0DHA/v+/8ASOOn19WmROMwovkwrHvqVNSqTZAEujKoAbN3tdLBvCSduVRfslp0R2gqDs0AKsBYWZrm2l7cyYFHDbKr1LZKDnM2RTlIBcAnKGawvZTpeUtobKqU0DOUF2enlzqXDJcNdRewutr8dIxOMq1L56rtcs1ixIzHNc23XPOWGJW2vj+5gbFsVvu6Z8CvrB//AGdiXaX2fAbOxFQH7uoBa2ppslWncD+Sx9k4psLEAJYm2VzvNt4mz7e6T1sXk7RswRQFCjKu4Xa35j9WlR0qhtnZdHEVMWuLYtVWzUwrEcDe2W4OnE8TMLhOmeFTDrQqYU18j1GUMFCWLuUOt9crW3TmrYm192m/W/wnx9svxY/yrb3mTsHVtpVy+EWk1ajQDu1ddbGndw6BSCLgZmFwu9bDnMLX6RAkUq2169QaA9igpjxDOQCw9+m43mhVMW7WGUmwsM7k2HK3LX3yzq1HUEioF/lUfE3k+cG7PtDDhaiU8NmBLBHdjmRD6NhoLj95SxPTZ07oq0aW7RAtwApW1tTaxOl7akzQsPReurO1QuEN2BOuXXUeVpRHYg6D69so2LafStajFnrNUc7yBqdLb2mLrbSaoLqpt4m/u0Ex4xNLXugfv9eRlbCVUqBjcrltfKN9723+W/xhXzVrsLDML8gB/WXeCwVV3UL3qrns1pa5+/x00ud1vH2XGysE9ap2eEwzVX04Z2F76n8Ki+4nTSdq6uOr77GftOJIfEEd0DVaQO/Xi53X4DQcyG19EtkfY8JRw97lE7x4FySzkeGYmZeRJgIiICIiBq3TPoNhtoC7g06wFlrJbNu0DA6OvgdeRE5Btnqx2hhiStMYhOD0vS3XuaZ1HqJ3T0RItA8qVaDIbOjIRwZSptw0OsoG3D63fKer6tFWBDKGB0IIBBHiDMfiejmDqEl8HQYta5aihJtuuSOEDy39ey3yMp/091vlPT79DdnG99n4bXf9yny0nyehWzdR/d2G11P3CfLSB5euB7v/AB+Uhag07w4ft8p6oTopgBmtgMN3rX+4p2OX0dMvCX9LZ9Fb5aNNb2vZFF7br2GsDyphdnVqnoUKr2t6NN2te1twO+Z/Z/V9tOt6ODdd2tQimNbfnIJ4z0raIHBqnVFj1pPUL0mdVutJCzM5FrjMwUA77Tne0sNUpO1GvTNOotgyH0lJAI9xB9c9emee+vLZXY7RFYL3cRSVt++pT7j6cO72UDSMO5BuoHj4/KX9KqCbl2Gu51zqBfwtw8N6+OmED2mT6PVKb4mhTxDHsnqKjlbKwDHLcEjgSCdNwMC9zEgA4hLcsjW9K261t3e8vHSGyjfiOXo0yeJvvtuFj652B+pzB30xGIHrpn/wlah1Q4Aek9d/Ooo/0qJz8Z/BxXPTG81GPdvYqo/UBvPkZYY3FUwP4QPo+k7G9t+gtv09k9G4Xq12Wn+6B/53qP7i1plMJ0S2fSN6eAw6n8wopm/zWvLweYOi2LUGpe1iliB5/K8oU+jZ/FiFHkpPynTOuzEqcSmHRVQU6SuSqKLs5YEMQM1goU2B47jOa06xIv6vZpKKi7Ew6jvVmbyAX5zYOgWx6NbHUKNOiXUuGqhiWHZICWLcAL5R5kDjNZdp2T+z9QHZ4upbe9NL8e6rNa//AHCB1TB4KnRUJSprTQblRQq+wSvEQEmRJgIiICIiAiIgIkRAmJEQJiREBERATQeujYAxOz2qqPvMMe2BtclLWqqPVZvNBN+ny6Aggi4IsR4HfA8b3nwxme6d9G22fjKmH17P06TE3LUmJyk+IsVP8vjNfhHp/qv6VDaGCRmb7+lalWHHMB3X8mGvnccJuE8p9AelL7Nxa1xc0mslZB+KmTqQOLL6Q9Y4z1Ng8UlVFqU2DI6hlYG4ZSLggwqtPirUCqWO4Ak+Q1M+5gOnm1kwuAxFR2t906LxLVHUqigcySIHnbpDt99oYmriClmqEZUUE2RQFQX52AJ8SZialLIctwSN5G651IB423X8JNKswQKrnKTewOkp3HOAnXOoLazZ6+Ey9zL2+biHutMjxBFrcsp5zkdvA/D4zsX9n3Ad3F4g8Wp0Ry7oZ2t/nX2QOvxEQEmRJgIiICIiAiIgIiIERJkQJkSZEBERAREQNL60+h42jhTkH+IpXekbC7ad6lfk2nrCmeZmBBIIII0IOhB4gjhPZs4X10dAWpu20MMl6bd6uij0G/FW/lbjYaHXibEckLTpPVL1jjBEYTFN/hmPcqHXsGO8H/lk+w67ibcxLT4JlHtSjVVlDKwZSAQQbgg7iCN4nEuv7aebE4bCg6JTasRb8TnIpvx0Vpzzop06x+z+7h616f8Awagz0r+Avdf+0iUOk3SCrjcU+Lq2V2CDKpJRVRQLLmJsLgnzJkVaYmoVtZbn+W5tKTvWtoCo8bKPfM1sTo7tHG/+2w9R1079hTpi/wDzDYH1XnZOgHVPSwhXEYwrXxAsVXfSpNvuAfTYfmO7gOMI5Tsnqw2tiCL0DTU271QhAAeNj3vdPRXRLo/TwGFp4anqFHebcXc+k1uGvDgAJmIhSJMiAkyJMBERAREQEREBERASIiAkyIgIiICIiAkMoIsRcHSx3SYgcn6Z9TFGuzVcFUFBySxpNc0SxuTlI7yXNtBcDgJzvEdUm11bKMIri/pLXpZfPvMD7p6ciBwDYPUjjHIOKrUqC6aLetU8RpZR53M6Z0e6sNm4Szdh29QW+8r2qG44hLZF9QvNziBCqALAWA4DdJiICIiAiIgJMiTAREQEREBERAREQERECJMRASJMQIiTECIkxAiJMQIkxECIkxAiJMQIiTEBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQP//Z');




$product2 = new Product('Felix', 'Lettiera', 10, 100, $cat_category);
$product2->setDescription('lettiera per gatti');
$product2->setPoster('data:image/jpeg;base64,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');





$food1 = new Food('RR', "Croccantini", 20, 40, $dog_category);
$food1->setDescription('croaccatini dal gusto unico');
$food1->setPoster('https://baiuland.it/bianchi/wp-content/uploads/2019/09/croccantini.png');




$products = [$food1, $product2, $product1];

var_dump($products);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



</head>

<body>
    <div class="container w-75">
        <div class="row">
            <?php foreach ($products as  $product) { ?>
                <div class="card text-center border-0 col p-3">
                    <img src="<?php echo $product->getPoster() ?>" class="card-img-top w-25 align-self-center rounded-3" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php 
                                echo $product->getBrand() . " "; echo $product->getName(); 
                            ?>
                        </h5>
                        <p class="card-text"> <?php echo $product->getDescription() ?></p>
                        <p class="card-text">Categoria: <?php echo $product->getCategory()?></p>
                        <p class="card-text">Prezzo: <?php echo $product->getPrice() . "€" ?></p>
                        <p class="card-text"><?php echo $product->getAmount() . " prodotti disponibili" ?></p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>