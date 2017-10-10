<p>JSON format:</p>

[
  {
    "id": 1,
    "name": "Player Skates",
    "description": "For Players",
    "brand_id": 1,
    "category_id": 1,
    "model_manufacture_date": "2013-09-03",
    "price": "0.00",
    "created_at": null,
    "updated_at": null
  },
  {
    "id": 2,
    "name": "Goalie Skates",
    "description": "For Goalies",
    "brand_id": 2,
    "category_id": 2,
    "model_manufacture_date": "2012-02-01",
    "price": "0.00",
    "created_at": null,
    "updated_at": null
  }
] 

<p>API calls:</p>

<p>READ:</p>
<p>GET::http://localhost/SkateShop/public/index.php/api/v1/skates/{id?}</p>
<p>GET::http://localhost/SkateShop/public/index.php/api/v1/categories/{id?}</p>
<p>GET::http://localhost/SkateShop/public/index.php/api/v1/brands/{id?}</p>

<p>CREATE:</p>
<p>POST::http://localhost/SkateShop/public/index.php/api/v1/skates</p>
<p>POST::http://localhost/SkateShop/public/index.php/api/v1/categories</p>
<p>POST::http://localhost/SkateShop/public/index.php/api/v1/brands</p>

<p>UPDATE:</p>
<p>POST::http://localhost/SkateShop/public/index.php/api/v1/skates/{id}</p>
<p>POST::http://localhost/SkateShop/public/index.php/api/v1/categories/{id}</p>
<p>POST::http://localhost/SkateShop/public/index.php/api/v1/brands/{id}</p>

<p>DELETE:</p>
<p>DELETE::http://localhost/SkateShop/public/index.php/api/v1/skates/{id}</p>
<p>DELETE::http://localhost/SkateShop/public/index.php/api/v1/categories/{id}</p>
<p>DELETE::http://localhost/SkateShop/public/index.php/api/v1/brands/{id}</p>

