-- Insertar 5 usuarios
INSERT INTO users (username, password, rol, email) VALUES
('juan_perez', 'password123', 'usuario', 'juan@email.com'),
('maria_garcia', 'securepass', 'usuario', 'maria@email.com'),
('carlos_lopez', 'mypassword', 'usuario', 'carlos@email.com'),
('ana_martinez', 'ana123456', 'usuario', 'ana@email.com'),
('luis_rodriguez', 'luispass', 'usuario', 'luis@email.com');

-- Insertar 4 productos para el usuario 1 (juan_perez)
INSERT INTO productos (nombre, descripcion, precio, imagen, vendedor, vendido, categoria) VALUES
('Laptop HP Pavilion', 'Laptop HP Pavilion 15.6 pulgadas, 8GB RAM, 256GB SSD', 450.00, 'https://images.unsplash.com/photo-1593640408182-31c70c8268f5?w=500', 1, false, 'Tecnología'),
('iPhone 12 Pro', 'iPhone 12 Pro 128GB, color azul, en excelente estado', 300.00, 'https://images.unsplash.com/photo-1592750475338-74b7b21085ab?w=500', 1, false, 'Tecnología'),
('Mesa de Roble Macizo', 'Mesa de comedor de roble macizo, 6 plazas, perfecto estado', 120.00, 'https://images.unsplash.com/photo-1556020685-ae41abfc9365?w=500', 1, false, 'Hogar'),
('Silla Ergonómica Oficina', 'Silla ergonómica para oficina, ajustable, color negro', 80.00, 'https://images.unsplash.com/photo-1586953208448-b95a79798f07?w=500', 1, false, 'Oficina');

-- Insertar 4 productos para el usuario 2 (maria_garcia)
INSERT INTO productos (nombre, descripcion, precio, imagen, vendedor, vendido, categoria) VALUES
('Bicicleta Montaña Trek', 'Bicicleta de montaña Trek, suspensión delantera, 21 velocidades', 250.00, 'https://images.unsplash.com/photo-1558618666-fcd25856cd63?w=500', 2, false, 'Deportes'),
('Cámara Canon EOS R', 'Cámara réflex Canon EOS R con lente 24-105mm', 350.00, 'https://images.unsplash.com/photo-1502920917128-1aa500764cbd?w=500', 2, false, 'Fotografía'),
('Libro de Cocina Italiana', 'Libro de recetas tradicionales italianas, edición especial', 25.00, 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=500', 2, false, 'Libros'),
('Juego de Sartenes Profesional', 'Set de 3 sartenes antiadherentes de titanio', 45.00, 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=500', 2, false, 'Cocina');

-- Insertar 4 productos para el usuario 3 (carlos_lopez)
INSERT INTO productos (nombre, descripcion, precio, imagen, vendedor, vendido, categoria) VALUES
('Guitarra Acústica Yamaha', 'Guitarra acústica Yamaha F310, ideal para principiantes', 150.00, 'https://images.unsplash.com/photo-1516924962500-2b4b3b99ea02?w=500', 3, false, 'Música'),
('Monitor Gaming 24"', 'Monitor LED 24 pulgadas, 144Hz, resolución Full HD', 180.00, 'https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=500', 3, false, 'Tecnología'),
('Mochila de Viaje 40L', 'Mochila impermeable para viajes, capacidad 40 litros', 60.00, 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500', 3, false, 'Viajes'),
('Smartwatch Apple Watch', 'Apple Watch Series 6, GPS, correa deportiva', 90.00, 'https://images.unsplash.com/photo-1579586337278-3f436f4c5c90?w=500', 3, false, 'Tecnología');

-- Insertar 4 productos para el usuario 4 (ana_martinez)
INSERT INTO productos (nombre, descripcion, precio, imagen, vendedor, vendido, categoria) VALUES
('Sofá Cama Moderno', 'Sofá cama de 2 plazas, color gris, fácil conversión', 280.00, 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=500', 4, false, 'Hogar'),
('Tablet Samsung Galaxy Tab', 'Tablet Samsung 10.4 pulgadas, 64GB, WiFi', 200.00, 'https://images.unsplash.com/photo-1561154464-82e9adf32764?w=500', 4, false, 'Tecnología'),
('Zapatillas Running Nike', 'Zapatillas deportivas Nike Air Max, talla 38, color blanco', 55.00, 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500', 4, false, 'Moda'),
('Lámpara de Pie LED', 'Lámpara de pie moderna, luz regulable, diseño escandinavo', 35.00, 'https://images.unsplash.com/photo-1507473885765-e6ed057f782c?w=500', 4, false, 'Hogar');

-- Insertar 4 productos para el usuario 5 (luis_rodriguez)
INSERT INTO productos (nombre, descripcion, precio, imagen, vendedor, vendido, categoria) VALUES
('Drone DJI Mavic Air', 'Drone DJI Mavic Air 2, cámara 4K, control remoto incluido', 400.00, 'https://images.unsplash.com/photo-1473968512647-3e447244af8f?w=500', 5, false, 'Tecnología'),
('Consola PlayStation 5', 'PS5 con mando DualSense, edición estándar, perfecto estado', 380.00, 'https://images.unsplash.com/photo-1606813907291-d86efa9b94db?w=500', 5, false, 'Videojuegos'),
('Audífonos Sony WH-1000XM4', 'Audífonos inalámbricos Sony, cancelación de ruido', 120.00, 'https://images.unsplash.com/photo-1583394838336-acd977736f90?w=500', 5, false, 'Audio'),
('Maleta de Viaje Rígida', 'Maleta de viaje 28 pulgadas, rígida, 4 ruedas, color azul', 75.00, 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500', 5, false, 'Viajes');