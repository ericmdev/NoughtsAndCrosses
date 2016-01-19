NoughtsAndCrosses
=================

[![Build Status](https://travis-ci.org/ericmdev/NoughtsAndCrosses.svg?branch=master)](https://travis-ci.org/ericmdev/NoughtsAndCrosses)
[![Stories in Ready](https://badge.waffle.io/ericmdev/NoughtsAndCrosses.png?label=ready&title=Ready)](http://waffle.io/ericmdev/NoughtsAndCrosses)
[![Coverage Status](https://coveralls.io/repos/ericmdev/NoughtsAndCrosses/badge.svg?branch=develop&service=github)](https://coveralls.io/github/ericmdev/NoughtsAndCrosses?branch=develop)

A PHP application that **learns** to play Xs and Os.

It uses artifical neural networks to improve gameplay based on numeric weights tuned on experience.

The application *demonstrates* **machine learning** in a PHP game.

### Application Environment

#### Native Docker

You can build and run the NoughtsAndCrosses application environment using native Docker.

*Bash scripts in `docker/bin`:*

    # Stop and remove all containers.
    . docker/bin/clean

    # Delete all images and stop and remove all containers.
    . docker/bin/clean-all

    # Build the image `noughtsandcrosses-image`.
    . docker/bin/build

    # Run the container `noughtsandcrosses-container`.
    . docker/bin/run

    # Access the container `noughtsandcrosses-container`.
    . docker/bin/exec

    # List running containers.
    . docker/bin/containers

    # List machines.
    . docker/bin/machines

    # Show ip of default machine.
    . docker/bin/ip

*Browser:*
Visit: `<docker_machine_ip>:<docker_container_host_port_80>/index.php`.

#### Vagrant

Vagrant up creates a virtual machine with Docker installed.

*VM:*
- OS: Ubuntu 14.04.1 LTS (Trusty Tahr) - 64-bit
- Memory: 512 MB

*Provisioning:*
Provisioning builds the Docker image `noughtsandcrosses-image` and runs the Docker container `noughtsandcrosses-container` inside the vm.

    # Spin up Vagrant VM.
    $ vagrant up

    # SSH to Vagrant VM at host port 2222.
    $ vagrant ssh

    # Show Docker images.
    $ docker images

    # Show Docker running containers.
    $ docker ps -a

    # Access Docker container.
    $ docker exec -it noughtsandcrosses-container bash
