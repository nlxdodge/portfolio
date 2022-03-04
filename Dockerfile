FROM composer:latest

# install dependencies
RUN apk add imagemagick nodejs npm --no-progress
COPY package*.json ./
RUN composer require tightenco/jigsaw --no-progress
RUN npm install -g nodemon --no-progress && npm install --no-progress

# add code
COPY . .

# run local for development
EXPOSE 3000
CMD ["npm", "run", "watch"]