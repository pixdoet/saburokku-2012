# subrocks-2012
a 2012 rewrite for subrocks

[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/the-real-sumsome/subrocks-2012/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/the-real-sumsome/subrocks-2012/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/the-real-sumsome/subrocks-2012/badges/build.png?b=main)](https://scrutinizer-ci.com/g/the-real-sumsome/subrocks-2012/build-status/main)

SubRocks is a faithful recreation & reverse engineering effort for 2012 YouTube. You can visit the site at https://subrock.rocks.

![SubRocks 2012 Homepage](https://i.imgur.com/gfLcCdI.png)

## Requirements
- Docker
- Linux (Recommended)
- A functioning brain
- Blood vessels

## How to setup
Run `docker-compose up -d` inside the root of this repository.

Wait for it to compile everything, then tada.

- Web server: localhost:8000
- PHPMyAdmin: localhost:8080
  - username: root
  - password: root
  - host:     (none, or you can put mysql)

## Things that you should expect soon:
- ~~Dockerized~~
- Templating
- ~~Router~~
- Translations

## Features (so far with 2012)
- Register
- Signup
  - with way nicer handling than current subrocks/fulptube
  - proper validation
- New uploader
- Channel pages (WIP)
- Channel customization (WIP)
- "My Account" pages
  - Playlists pages
  - Video Manager page
  - Favorites page
  - ...and others
- Videos Browse Page
  - With all categories
- Reverse engineered ajax calls
  - Fixed guide response
  - Commenting
