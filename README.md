# DOCKER LEMP (Linux, Nginx, MariaDB, PHP)

## Simple LEMP stack

### Get starting
```shell
# Clone the repository
git clone https://github.com/Ivanitch/docker-lemp.git .

# Delete the .git folder if you want to start your own project
rm -rf ./.git

# Make a copy of the file and specify your settings
cp ./.env.dist ./.env
cp ./docker/nginx/conf.d/site.conf.dist ./docker/nginx/conf.d/site.conf

# Start to build docker images in your docker-compose file
make build

# Go to the server container
make server

# Stopping all containers
make stop
```