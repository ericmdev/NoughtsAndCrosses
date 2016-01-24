# Build the image.
build:
	docker build -t noughtsandcrosses-image -f Dockerfile .

# Stop and remove all containers.
clean:
	docker stop noughtsandcrosses-container
	docker rm noughtsandcrosses-container

# Remove the image.
clean-image:
	docker rm noughtsandcrosses-image

# Show all containers.
containers:
	docker ps -a

# Dig into the container.
exec:
	docker exec -it noughtsandcrosses-container bash

# Show ip of default machine.
ip:
	docker-machine ip default

# List machines.
machines:
	docker-machine ls

# Run the container.
run:
	docker run -d -P --name noughtsandcrosses-container \
							-v `pwd`:/srv/www/noughtsandcrosses \
							-v `pwd`/docker/volumes/var/log/nginx:/var/log/nginx/ \
							noughtsandcrosses-image