<?php

function addTeacher($pdo, $data, $file)
{
    $photoName = uploadPhoto($file);

    $stmt = $pdo->prepare("
        INSERT INTO tblteachers
        (Photo, First_Name, Last_Name, Gender, Subject, Class, Section, Address, DOB, Mobile, Email)
        VALUES (:photo, :first, :last, :gender, :subject, :class, :section, :address, :dob, :mobile, :email)
    ");

    return $stmt->execute([
        'photo'   => $photoName,
        'first'   => $data['first_name'],
        'last'    => $data['last_name'],
        'gender'  => $data['gender'],
        'subject' => $data['subject'],
        'class'   => $data['class'],
        'section' => $data['section'],
        'address' => $data['address'],
        'dob'     => $data['dob'],
        'mobile'  => $data['mobile'],
        'email'   => $data['email']
    ]);
}

function updateTeacher($pdo, $id, $data, $file)
{
    if (!empty($file['photo']['name'])) {
        $photoName = uploadPhoto($file);
        $photoSQL = ", Photo = :photo";
    } else {
        $photoName = $data['old_photo'];
        $photoSQL = "";
    }

    $stmt = $pdo->prepare("
        UPDATE tblteachers SET
            First_Name = :first,
            Last_Name  = :last,
            Gender     = :gender,
            Subject    = :subject,
            Class      = :class,
            Section    = :section,
            Address    = :address,
            DOB        = :dob,
            Mobile     = :mobile,
            Email      = :email
            $photoSQL
        WHERE ID = :id
    ");
    $params = [
        'id'       => $id,
        'first'    => $data['first_name'],
        'last'     => $data['last_name'],
        'gender'   => $data['gender'],
        'subject'  => $data['subject'],
        'class'    => $data['class'],
        'section'  => $data['section'],
        'address'  => $data['address'],
        'dob'      => $data['dob'],
        'mobile'   => $data['mobile'],
        'email'    => $data['email']
    ];

    if (!empty($photoSQL)) {
        $params['photo'] = $photoName;
    }

    return $stmt->execute($params);
}

function uploadPhoto($file)
{
    $photo = $file['photo'];
    if (empty($photo['name'])) {
        return null;
    }

    $ext = pathinfo($photo['name'], PATHINFO_EXTENSION);
    $newName = uniqid() . '.' . $ext;

    move_uploaded_file(
        $photo['tmp_name'],
        __DIR__ . "/../../uploads/" . $newName
    );

    return $newName;
}
