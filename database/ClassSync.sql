CREATE TABLE `users` (
  `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) UNIQUE NOT NULL,
  `password` VARCHAR(60) NOT NULL,
  `role` ENUM(admin,teacher,student) NOT NULL
);

CREATE TABLE `students` (
  `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
  `user_id` BIGINT UNIQUE NOT NULL,
  `dob` DATE,
  `phone` VARCHAR(20),
  `address` TEXT,
  `guardian_name` VARCHAR(255),
  `guardian_phone` VARCHAR(20)
);

CREATE TABLE `teachers` (
  `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
  `user_id` BIGINT UNIQUE NOT NULL,
  `phone` VARCHAR(20),
  `address` TEXT,
  `qualification` TEXT,
  `experience` TEXT,
);

CREATE TABLE `courses` (
  `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `description` TEXT,
  `status` ENUM(pending,open,closed) DEFAULT 'pending'
);

CREATE TABLE `shifts` (
  `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `start_time` TIME NOT NULL,
  `end_time` TIME NOT NULL
);

CREATE TABLE `classes` (
  `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `course_id` BIGINT NOT NULL,
  `teacher_id` BIGINT NOT NULL,
  `start_date` DATE,
  `end_date` DATE,
  `status` ENUM(pending,open,in_progress,completed) DEFAULT 'pending'
);

CREATE TABLE `schedules` (
  `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
  `class_id` BIGINT NOT NULL,
  `teacher_id` BIGINT NOT NULL,
  `day_of_week` ENUM(Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday) NOT NULL,
  `shift_id` BIGINT NOT NULL,
  `status` ENUM(pending,in_progress,completed) DEFAULT 'pending',
  `note` text
);

CREATE TABLE `enrollments` (
  `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
  `student_id` BIGINT NOT NULL,
  `class_id` BIGINT NOT NULL,
  `enrolled_at` TIMESTAMP DEFAULT 'CURRENT_TIMESTAMP',
  `status` ENUM(pending,approved,rejected) DEFAULT 'pending'
);

CREATE TABLE `attendance` (
  `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
  `student_id` BIGINT NOT NULL,
  `class_id` BIGINT NOT NULL,
  `schedules_id` BIGINT NOT NULL,
  `status` ENUM(present,absent,late) NOT NULL,
  `note` TEXT
);

CREATE TABLE `class_notes` (
  `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
  `teacher_id` BIGINT NOT NULL,
  `class_id` BIGINT NOT NULL,
  `schedules_id` BIGINT NOT NULL,
  `note` TEXT
);

CREATE TABLE `notifications` (
  `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
  `user_id` BIGINT NOT NULL,
  `message` TEXT NOT NULL,
  `status` ENUM(unread,read) DEFAULT 'unread'
);

CREATE TABLE `course_materials` (
  `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
  `course_id` BIGINT NOT NULL,
  `teacher_id` BIGINT NOT NULL,
  `title` VARCHAR(255) NOT NULL,
  `file_path` VARCHAR(255) NOT NULL,
  `uploaded_at` TIMESTAMP DEFAULT 'CURRENT_TIMESTAMP'
);

CREATE TABLE `leave_requests` (
  `id` BIGINT PRIMARY KEY AUTO_INCREMENT,
  `user_id` BIGINT NOT NULL,
  `role` ENUM(student,teacher) NOT NULL,
  `class_id` BIGINT,
  `schedules_id` BIGINT NOT NULL,
  `reason` TEXT,
  `status` ENUM(pending,approved,rejected) DEFAULT 'pending',
  `approved_by` BIGINT,
  `approved_at` TIMESTAMP
);

ALTER TABLE `students` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `teachers` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `classes` ADD FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

ALTER TABLE `classes` ADD FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);

ALTER TABLE `schedules` ADD FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`);

ALTER TABLE `schedules` ADD FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`);

ALTER TABLE `enrollments` ADD FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

ALTER TABLE `enrollments` ADD FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`);

ALTER TABLE `attendance` ADD FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

ALTER TABLE `attendance` ADD FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`);

ALTER TABLE `class_notes` ADD FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);

ALTER TABLE `class_notes` ADD FOREIGN KEY (`schedules_id`) REFERENCES `schedules` (`id`);

ALTER TABLE `class_notes` ADD FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`);

ALTER TABLE `notifications` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `course_materials` ADD FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

ALTER TABLE `course_materials` ADD FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);

ALTER TABLE `leave_requests` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `leave_requests` ADD FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`);

ALTER TABLE `leave_requests` ADD FOREIGN KEY (`schedules_id`) REFERENCES `schedules` (`id`);

ALTER TABLE `leave_requests` ADD FOREIGN KEY (`approved_by`) REFERENCES `users` (`id`);
