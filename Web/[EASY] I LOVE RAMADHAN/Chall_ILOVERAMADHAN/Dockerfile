FROM nginx:alpine

# Hapus config default nginx
RUN rm -rf /usr/share/nginx/html/*

# Copy semua file web ke nginx
COPY . /usr/share/nginx/html

# Expose port 80
EXPOSE 80
