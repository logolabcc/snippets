UPDATE wp_posts SET post_author='1' WHERE post_author='0';
UPDATE wp_users SET ID = '1' WHERE ID = '0';
UPDATE wp_usermeta SET user_id = '1' WHERE user_id = '0';
UPDATE wp_comments SET user_id = '1' WHERE user_id = '0';
ALTER TABLE wp_users AUTO_INCREMENT = 1;