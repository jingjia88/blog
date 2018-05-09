BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS `users` (
	`id`	integer NOT NULL PRIMARY KEY AUTOINCREMENT,
	`name`	varchar NOT NULL,
	`email`	varchar NOT NULL,
	`password`	varchar NOT NULL,
	`remember_token`	varchar,
	`created_at`	datetime,
	`updated_at`	datetime
);
INSERT INTO `users` VALUES (1,'renee','renee.ch48@gmail.com','$2y$10$PZLi33nxTKmdsoks8d7IkebaympgafmqkRdBL2rpIo4dafehotN8m',NULL,'2018-05-08 09:05:32','2018-05-08 09:05:32');
CREATE UNIQUE INDEX IF NOT EXISTS `users_name_unique` ON `users` (
	`name`
);
CREATE UNIQUE INDEX IF NOT EXISTS `users_email_unique` ON `users` (
	`email`
);
COMMIT;
