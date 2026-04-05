# EdoGroup - Employee Self-Service & Payroll System
ระบบบริหารจัดการบุคลากรและเงินเดือน สำหรับธุรกิจกลุ่มร้านอาหาร

## Project Overview
EdoGroup เป็นระบบ Web Application ที่พัฒนาขึ้นเพื่อเป็นศูนย์กลางการจัดการทรัพยากรบุคคล สำหรับพนักงานในกลุ่มธุรกิจร้านอาหาร ช่วยให้พนักงานสามารถเข้าถึงข้อมูลส่วนตัว ติดตามประวัติการทำงาน และตรวจสอบข้อมูลรายได้ด้วยตนเองแบบ Real-time เพื่อลดขั้นตอนการทำงานของฝ่ายบุคคลและเพิ่มความโปร่งใสในองค์กร

## Tech Stack
* **Backend:** Laravel 5.7 (PHP)
* **Database:** MySQL
* **Frontend:** Responsive Web Design (Bootstrap), jQuery
* **Security:** Data Encryption สำหรับข้อมูลเงินเดือน

## Key Features
* **Time & Attendance Tracking:** พนักงานสามารถเช็คประวัติการเข้างาน (ขาด ลา มา สาย) ได้ด้วยตนเอง
* **Leave Management System:** ระบบลางานออนไลน์ พร้อมฟีเจอร์ตรวจสอบสิทธิ์วันลาคงเหลือ และติดตามสถานะการอนุมัติจากหัวหน้างาน

## Technical Challenges & Solutions
* **Payroll Accuracy:** พัฒนา Logic การคำนวณเงินเดือนที่ซับซ้อน (Base Salary + OT + Incentives - Deductions) ให้มีความแม่นยำสูงและตรวจสอบย้อนหลังได้
* **Data Privacy:** ออกแบบระบบรักษาความปลอดภัยของข้อมูลเงินเดือน (Salary Confidentiality) โดยใช้การเข้ารหัสและการจัดการสิทธิ์การเข้าถึงอย่างรัดกุม

## Project Preview
<img width="300" height="300" alt="image" src="https://github.com/user-attachments/assets/896068b9-5676-4304-85e8-ee9996eb839b" />
