-- =============================================
-- Brankey Store - Clean SQL for PostgreSQL / Server
-- =============================================

-- Table: migrations
CREATE TABLE IF NOT EXISTS migrations (
  id BIGSERIAL PRIMARY KEY,
  version varchar(255) NOT NULL,
  class varchar(255) NOT NULL,
  "group" varchar(255) NOT NULL,
  namespace varchar(255) NOT NULL,
  "time" int NOT NULL,
  batch int NOT NULL
);

INSERT INTO migrations (id, version, class, "group", namespace, "time", batch) VALUES
(1, '2026-07-01-133345', 'App\\Database\\Migrations\\CreateProductsTable', 'default', 'App', 1751374431, 1),
(2, '2026-07-12-214548', 'App\\Database\\Migrations\\CreateOrdersTable', 'default', 'App', 1752360356, 2)
ON CONFLICT (id) DO NOTHING;

-- Table: products
CREATE TABLE IF NOT EXISTS products (
  id SERIAL PRIMARY KEY,
  kategori varchar(50) NOT NULL,
  nama_paket varchar(150) NOT NULL,
  harga int NOT NULL DEFAULT 0,
  fitur text NULL,
  link varchar(500) NULL,
  file_media varchar(255) NULL,
  created_at timestamp NULL,
  updated_at timestamp NULL
);

-- Table: orders
CREATE TABLE IF NOT EXISTS orders (
  id SERIAL PRIMARY KEY,
  nama_lengkap varchar(150) NOT NULL,
  nomor_wa varchar(150) NOT NULL,
  paket varchar(150) NOT NULL,
  harga int NOT NULL DEFAULT 0,
  catatan text NULL,
  status varchar(50) NOT NULL DEFAULT 'pending',
  created_at timestamp NULL,
  updated_at timestamp NULL
);
