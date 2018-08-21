
CREATE DATABASE IF NOT EXISTS `laraveldb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `laraveldb`;

DROP TABLE IF EXISTS `sermons`;
CREATE TABLE IF NOT EXISTS `sermons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=34 ;


INSERT INTO `sermons` (`title`, `text`, `tags`, `file`, `date`, `img`, `url`, `remember_token`, `created_at`, `updated_at`) VALUES
('7-22-2018 Sermon', 'Jesus superiority is fully established, but that isn''t the problem. The problem is that believers and unbelievers alike often don''t want to be made well. Pastor Anthony guides through passages in Hebrews 7.', 'Jesus, Buddah, Muhammad, Melchizedek, Melchisedech, Melchisedec, Hebrews, High-Priest, Anthony Trujillo', '7-22-2018 Sermon', '7-22-2018', 'img', 'url', NULL, '2018-07-23 22:31:38', '2018-07-23 22:31:38'),
('7-29-2018 Sermon', 'Pastor Anthony conveys God''s message in Hebrews 8 regarding the new covenant which establishes a relationship between God and His people through our savior Jesus Christ.', 'Hebrews 8, Jeremiah 31, New Covenant, Relationship, True Worship, Anthony Trujillo', '7-29-2018 Sermon', '7-29-2018', 'img', 'url', NULL, '2018-07-30 03:47:00', '2018-07-30 03:48:33'),
('7-29-2018 Bible Study', 'Pastor Ken continues a study in Joshua in which the Israelites continue to distribute the promised land according to Moses'' instructions. Caleb is now 85, and following God whole-heartedly he endeavors to take the hard path in faith.', 'Joshua 14, Ken Trujillo, Caleb, Moses, Promised Land, Giants, Hebron, Anakims, Arba, Kirjatharba', '7-29-2018 Bible Study', '7-29-2018', 'img', 'url', NULL, '2018-07-30 04:17:25', '2018-07-30 04:17:25'),
('8-5-2018 Sermon', 'The death, burial and resurrection of Jesus Christ ushered in the New Age. The veil was torn, the final sacrifice had been made. Our religion calls for a personal sacrifice which God himself exemplified in the work of His son, that we should walk like that one walked, taking up our cross daily. God doesn''t want an hour morning, noon and night, he wants our all.', 'Sacrifice, Hebrews 9, Anthony Trujillo', '8-5-2018 Sermon', '8-5-2018', 'img', 'url', NULL, '2018-08-06 03:55:00', '2018-08-06 03:58:09'),
('8-5-2018 Bible Study', 'Part 1 of 4 in John''s series on Understanding Bible Interpretation, Customs and Cultures. This class focuses on basic principles of bible interpretation.', 'II Timothy 2:15, II Timothy 3:16, John 3:16, John Trujillo', '8-5-2018 Bible Study', '8-5-2018', 'img', 'url', NULL, '2018-08-06 03:57:40', '2018-08-06 03:57:40'),
('8-12-2018 Sermon', 'Pastor Anthony teaches through Hebrews 10 reminding that believers are slaves to Christ and that we have assurance in our salvation. We don''t earn it, and we don''t have "keep up work" to do in order to maintain it.', 'Hebrews 10', '8-12-2018 Sermon', '8-12-2018', 'img', 'url', NULL, '2018-08-13 04:07:45', '2018-08-13 04:07:45'),
('8-12-2018 Bible Study', 'John Trujillo continues with Part 2 of  the study: Understanding Bible Interpretation, Customs and Cultures. Today''s lesson discusses proper biblical interpretation in contrast with common misinterpretations including requirements for salvation and baptism', 'Romans 10:9, Mark 16:16, Matthew 28:19, Luke 23:40-43', '8-12-2018 Bible Study', '8-12-2018', 'img', 'url', NULL, '2018-08-13 04:21:46', '2018-08-13 04:21:46'),
('8-19-2018 Sermon', 'Pastor Anthony continues a study in the book of Hebrews at chapter 10. We have a full assurance of faith, though the devil works in fear wherever he can. Let us continue to gather and to stir one another up to love and good works.', 'Anthony Trujillo, Hebrews 10', '8-19-2018 Sermon', '8-19-2018', 'img', 'url', NULL, '2018-08-21 01:29:37', '2018-08-21 01:29:37'),
('8-19-2018 Bible Study', 'John Trujillo continues his series covering proper study of the bible and how damaging improper interpretation can be.', 'Interpretation, Bible, John Trujillo', '8-19-2018 Bible Study', '8-19-2018', 'img', 'url', NULL, '2018-08-21 01:32:43', '2018-08-21 01:32:43'),
('8-19-2018 Evening', 'Our evening message with Pastor Anthony starts in Matthew 17:22. The life and times of Jesus Christ', 'Anthony Trujillo, Life of Jesus, Matthew', '8-19-2018 Evening', '8-19-2018', 'img', 'url', NULL, '2018-08-21 01:35:40', '2018-08-21 01:35:40');
