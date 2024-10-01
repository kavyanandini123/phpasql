<?php
include_once 'db_handler.php';

class OfficeHandler extends Connection {
    // CRUD functions for tbldept
    public function createDepartment($deptcode, $deptname, $deptlocation) {
        $sql = "INSERT INTO tbldept (deptcode, deptname, deptlocation) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('sss', $deptcode, $deptname, $deptlocation);
        return $stmt->execute();
    }

    public function readDepartments() {
        $sql = "SELECT * FROM tbldept";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateDepartment($deptcode, $deptname, $deptlocation) {
        $sql = "UPDATE tbldept SET deptname = ?, deptlocation = ? WHERE deptcode = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('sss', $deptname, $deptlocation, $deptcode);
        return $stmt->execute();
    }

    public function deleteDepartment($deptcode) {
        $sql = "DELETE FROM tbldept WHERE deptcode = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('s', $deptcode);
        return $stmt->execute();
    }
    public function getDepartmentByCode($deptcode) 
    { 
        $stmt = $this->conn->prepare("SELECT * FROM tbldept WHERE deptcode = ?"); $stmt->bind_param("s", $deptcode); $stmt->execute(); 
        $result = $stmt->get_result(); 
        return $result->fetch_assoc(); 
    }  
    // CRUD functions for tblstudents
    public function createStudent($studentcode, $studentname, $dateofbirth, $deptcode) {
        $sql = "INSERT INTO tblstudent (studentcode, studentname, dateofbirth, deptcode) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ssss', $studentcode, $studentname, $dateofbirth, $deptcode);
        return $stmt->execute();
    }

    public function readStudents() {
        $sql = "SELECT * FROM tblstudent";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateStudent($studentcode, $studentname, $dateofbirth, $deptcode) {
        $sql = "UPDATE tblstudent SET studentname = ?, dateofbirth = ?, deptcode = ? WHERE studentcode = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ssss', $studentname, $dateofbirth, $deptcode, $studentcode);
        return $stmt->execute();
    }

    public function deleteStudent($studentcode) {
        $sql = "DELETE FROM tblstudent WHERE studentcode = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('s', $studentcode);
        return $stmt->execute();
    }
}
?>
