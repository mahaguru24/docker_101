# How to run

1. Run `docker-compose up` in the root directory of the project
2. Open your web browser and navigate to `http://localhost:8080` to see the frontend app in action
3. Play around with the game
4. Open your web browser and navigate to `http://localhost:8081` to see the backend app in action
5. Login to the backend container

```bash
docker exec -it docker_101-laravel.test-1 bash
```
4: run migrations

```bash
php artisan migrate
```



