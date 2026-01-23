<?php
// aziz boujaada //
namespace App\Models\Services;

use App\Models\Classes\Condidate;
use App\Models\Repositories\CondidateRepo;

class CondidateService
{




  public function register($full_name, $email, $phone_number, $password, $resume, $image)
  {

    $imageDir = __DIR__ . '/../../../public/uploads/images';
    $resumeDir = __DIR__ . '/../../../public/uploads/resumes';


    if (!is_dir($imageDir)) mkdir($imageDir, 0775, true);
    if (!is_dir($resumeDir)) mkdir($resumeDir, 0775, true);

    if (is_dir($imageDir)) rmdir($imageDir, 0775, true);
    if (is_dir($resumeDir)) rmdir($resumeDir, 0775, true);

    $allowedImages = ['image/jpeg', 'image/png', 'image/jpg'];
    if (!in_array($image['type'], $allowedImages)) {
      die("invalid image type");
    }

    if ($resume['type'] !== 'application/pdf') die("resume must be PDF");

    $imageName = uniqid() . '_' . basename($image['name']);
    $resumeName = uniqid() . '_' . basename($resume['name']);

    $imagePath = $imageDir . '/' . $imageName;
    $resumePath = $resumeDir . '/' . $resumeName;

    move_uploaded_file($image['tmp_name'], $imagePath);
    move_uploaded_file($resume['tmp_name'], $resumePath);


    $path_img = 'uploads/images/' . $imageName;
    $path_resume = 'uploads/resumes/' . $resumeName;

    //hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);


    $condidateRepo = new CondidateRepo();

    $roleID = $condidateRepo->getRoleID('condidate');

    if (!$roleID) {
      die("Role not found. Add role 'condidate' in roles table");
    }

    $isExistEmail = $condidateRepo->emailExist($email);
    if($isExistEmail){
      die("this email already exist");
    }

    $condidate = new Condidate(null, $full_name, $email, $hashed_password, $phone_number, $path_img, $roleID, $path_resume);

    $condidateRepo->insertCondidat($condidate);
  }
}
