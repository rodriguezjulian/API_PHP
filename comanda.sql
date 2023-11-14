{
	"info": {
		"_postman_id": "b4b863fc-0976-4f85-a4ad-dbd93df1ec3b",
		"name": "Comanda",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
		"_exporter_id": "28523340"
	},
	"item": [
		{
			"name": "Alta pedido",
			"request": {
				"method": "POST",
				"header": [],
				"body": {
					"mode": "formdata",
					"formdata": [
						{
							"key": "nombreCliente",
							"value": "Julian",
							"type": "text"
						},
						{
							"key": "totalPrecio",
							"value": "4545",
							"type": "text"
						},
						{
							"key": "estado",
							"value": "Preparacion",
							"type": "text"
						},
						{
							"key": "tiempoEstimado",
							"value": "10",
							"type": "text"
						},
						{
							"key": "numeroMesa",
							"value": "4",
							"type": "text"
						},
						{
							"key": "id",
							"value": "",
							"type": "text",
							"disabled": true
						}
					]
				},
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/pedido",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"pedido"
					]
				}
			},
			"response": []
		},
		{
			"name": "Alta encuesta",
			"request": {
				"method": "POST",
				"header": [],
				"body": {
					"mode": "formdata",
					"formdata": [
						{
							"key": "nombreCliente",
							"value": "tony",
							"type": "text"
						},
						{
							"key": "descripcion",
							"value": "todo",
							"type": "text"
						},
						{
							"key": "puntuacionMesa",
							"value": "5",
							"type": "text"
						},
						{
							"key": "puntuacionMozo",
							"value": "6",
							"type": "text"
						},
						{
							"key": "puntuacionCocinero",
							"value": "7",
							"type": "text"
						},
						{
							"key": "puntuacionRestaurant",
							"value": "8",
							"type": "text"
						}
					]
				},
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/encuesta",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"encuesta"
					]
				}
			},
			"response": []
		},
		{
			"name": "Listar pedidos",
			"request": {
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/pedido",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"pedido"
					]
				}
			},
			"response": []
		},
		{
			"name": "Listar encuestas",
			"request": {
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/encuesta",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"encuesta"
					]
				}
			},
			"response": []
		},
		{
			"name": "Alta empleado",
			"request": {
				"method": "POST",
				"header": [],
				"body": {
					"mode": "formdata",
					"formdata": [
						{
							"key": "rol",
							"value": "Cocinero",
							"type": "text"
						},
						{
							"key": "nombre",
							"value": "Alfio",
							"type": "text"
						},
						{
							"key": "disponible",
							"value": "Disponible",
							"type": "text"
						},
						{
							"key": "estado",
							"value": "Presente",
							"type": "text"
						}
					]
				},
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/empleado",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"empleado"
					]
				}
			},
			"response": []
		},
		{
			"name": "Listar empleados",
			"request": {
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/empleado",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"empleado"
					]
				}
			},
			"response": []
		},
		{
			"name": "Alta mesa",
			"request": {
				"method": "POST",
				"header": [],
				"body": {
					"mode": "formdata",
					"formdata": [
						{
							"key": "idPedido",
							"value": "2",
							"type": "text"
						},
						{
							"key": "idMozo",
							"value": "2",
							"type": "text"
						},
						{
							"key": "estado",
							"value": "Comiendo",
							"type": "text"
						}
					]
				},
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/mesa",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"mesa"
					]
				}
			},
			"response": []
		},
		{
			"name": "Listar mesas",
			"request": {
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/mesa",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"mesa"
					]
				}
			},
			"response": []
		},
		{
			"name": "Alta producto",
			"request": {
				"method": "POST",
				"header": [],
				"body": {
					"mode": "formdata",
					"formdata": [
						{
							"key": "nombre",
							"value": "churro",
							"type": "text"
						},
						{
							"key": "precio",
							"value": "202",
							"type": "text"
						},
						{
							"key": "tipo",
							"value": "Cervecero",
							"type": "text"
						},
						{
							"key": "tiempo",
							"value": "50",
							"type": "text"
						}
					]
				},
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/producto",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"producto"
					],
					"query": [
						{
							"key": "nombre",
							"value": "churro",
							"disabled": true
						},
						{
							"key": "precio",
							"value": "202",
							"disabled": true
						},
						{
							"key": "tipo",
							"value": "Cervecero",
							"disabled": true
						},
						{
							"key": "tiempo",
							"value": "50",
							"disabled": true
						}
					]
				}
			},
			"response": []
		},
		{
			"name": "Listar productos",
			"request": {
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/producto",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"producto"
					],
					"query": [
						{
							"key": "id",
							"value": "1",
							"disabled": true
						}
					]
				}
			},
			"response": []
		},
		{
			"name": "Obtener pedido",
			"request": {
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/pedido/1s4lv",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"pedido",
						"1s4lv"
					]
				}
			},
			"response": []
		},
		{
			"name": "Obtener empleado",
			"request": {
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/empleado/1",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"empleado",
						"1"
					]
				}
			},
			"response": []
		},
		{
			"name": "Obtener encuesta",
			"request": {
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/encuesta/2",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"encuesta",
						"2"
					]
				}
			},
			"response": []
		},
		{
			"name": "Obtener mesa",
			"request": {
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/mesa/1",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"mesa",
						"1"
					]
				}
			},
			"response": []
		},
		{
			"name": "Obtener producto",
			"request": {
				"method": "GET",
				"header": [],
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/producto/2",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"producto",
						"2"
					]
				}
			},
			"response": []
		},
		{
			"name": "Alta empleado MD Rol",
			"request": {
				"method": "POST",
				"header": [],
				"body": {
					"mode": "formdata",
					"formdata": [
						{
							"key": "rol",
							"value": "Cocinero",
							"type": "text"
						},
						{
							"key": "nombre",
							"value": "Alfio",
							"type": "text"
						},
						{
							"key": "disponible",
							"value": "Disponible",
							"type": "text"
						},
						{
							"key": "estado",
							"value": "Presente",
							"type": "text"
						}
					]
				},
				"url": {
					"raw": "http://localhost/slim-php-deployment/app/empleado?rol=Socio",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"path": [
						"slim-php-deployment",
						"app",
						"empleado"
					],
					"query": [
						{
							"key": "rol",
							"value": "Socio"
						}
					]
				}
			},
			"response": []
		}
	]
}