# Comándos útiles para utilizar la BD desde docker

## Ejecutar postgres por primera vez

En este directorio ejecutar

```console
~$ mkdir data 
~$ docker compose up
```

La BD quedará en el directorio data con permisos de postgres

## Levantar contenedor

```console
~$ docker compose up
```

## Bajar contenedor

```console
~$ docker compose down
```

## Ver contenedores ejecutando

```console
~$ docker ps
```

## Bash en el container

```console
~$ docker exec -it lab-usuarios-alumnos-db-1 bash
```

## Cliente de postgres en el container

Una vez en el container es posible contectarse a la base de datos con la linea de comandos

```console
~$ psql -U usuario usuariodb
```

## Ejecutar script de creación del esquema

```console
~$ psql -U usuario -f schema.sql usuariodb
```

# Comandos útiles de psql

| Comando       | Descripción                                                               |
| ------------- | ------------------------------------------------------------------------- |
| \h            | help                                                                      |
| \q            | quit                                                                      |
| \du           | list all roles with their permissions                                     |
| \l            | list all databases with their owners                                      |
| \c            | show the current user and the database that you are connected to          |
| \c {database} | connect to a particular database                                          |
| \dt           | list all tables in a connected database                                   |
| \d {table}    | list all columns and indexes for a specific table in a connected database |

 
 
 
 
 