<?php
require_once("validation.php");
require_once("./config/db_connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($fullname_err) && empty($phoneNumber_err) && empty($email_err) && empty($country_err) && empty($invest_from_err) && empty($invest_to_err) && empty($accrinvest_err) && empty($multi_checkbox_err)) {

        $sql_1 = "INSERT INTO user_info (fullName, phoneNumber, email, country) VALUES (?,?,?,?)";
        if ($stmt_1 = $mysqli->prepare($sql_1)) {

            $stmt_1->bind_param('ssss', $pfullname, $pphoneNumber, $pemail, $pcountry);
            $pfullname = $fullname;
            $pphoneNumber = $phoneNumber;
            $pemail = $email;
            $pcountry = $country;

            if ($stmt_1->execute()) {
                $last_id = $mysqli->insert_id;
            } else {
                echo "ERROR";
            }
            $stmt_1->close();
        }

        $sql_2 = "INSERT INTO invest_plans (user_id, _from, _to, accredited_investor) VALUES (?,?,?,?)";
        $sql_3 = "INSERT INTO invest_pref (user_id, single_family, residential_multifamily, commercial_retail, commercial_industrial ,commercial_hospital, commercial_warehousing, commercial_office, other) VALUES (?,?,?,?,?,?,?,?,?)";

        if (($stmt_2 = $mysqli->prepare($sql_2)) && ($stmt_3 = $mysqli->prepare($sql_3))) {
            $stmt_2->bind_param('iiis', $plast_id, $pinvest_from, $pinvest_to, $paccrinvest);
            $plast_id = $last_id;
            $pinvest_from = $invest_from;
            $pinvest_to = $invest_to;
            $paccrinvest = $accrinvest;

            $stmt_3->bind_param('iiiiiiiii', $plast_id, $psingle_family, $presidential_multifamily, $pcommercial_retail, $pcommercial_industrial, $pcommercial_hospital, $pcommercial_warehousing, $pcommercial_office, $pother);
            $plast_id = $last_id;
            $psingle_family = $single_family;
            $presidential_multifamily = $residential_multifamily;
            $pcommercial_retail = $commercial_retail;
            $pcommercial_industrial = $commercial_industrial;
            $pcommercial_hospital = $commercial_hospital;
            $pcommercial_office = $commercial_office;
            $pcommercial_warehousing = $commercial_warehousing;
            $pother = $other;

            if ($stmt_2->execute() && $stmt_3->execute()) {
                session_start();
                $_SESSION['success_message'] = "Form submitted successfully.";
                header("Location: index.php");
                exit();
            } else {
                echo "Something went wrong";
            }


            $stmt_2->close();
            $stmt_3->close();
        }
    }
    $mysqli->close();
}
