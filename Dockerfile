# not latest because that uses PHP 8.1 and Jisaw doesn't have support for that
FROM composer:2.2.0

WORKDIR /app

RUN apk add imagemagick nodejs npm
COPY package*.json ./
RUN npm install

# add source code (no node_modules because of the .dockerignore file)
COPY . .

# require jigsaw only after copy of the code so it can do the bootstrapping
RUN composer require tightenco/jigsaw

# run local for development
CMD ["npm", "run", "watch-poll"]