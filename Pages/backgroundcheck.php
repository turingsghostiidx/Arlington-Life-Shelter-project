<?php include 'include.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arlington Life Shelter Additional Forms</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            color: #222;
            line-height: 1.45;
        }

        .container {
            max-width: 980px;
            margin: 36px auto;
            background: #fff;
            padding: 32px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }

        h1, h2 {
            margin-top: 0;
            text-align: center;
        }

        .section {
            margin-top: 34px;
            padding-top: 22px;
            border-top: 1px solid #ddd;
        }

        .grid {
            display: grid;
            gap: 16px;
        }

        .grid-2 {
            grid-template-columns: repeat(2, 1fr);
        }

        .grid-3 {
            grid-template-columns: repeat(3, 1fr);
        }

        .grid-4 {
            grid-template-columns: repeat(4, 1fr);
        }

        .full {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #bbb;
            border-radius: 8px;
            font-size: 14px;
            background: #fff;
        }

        .inline-options {
            display: flex;
            flex-wrap: wrap;
            gap: 12px 20px;
            margin-top: 6px;
        }

            .inline-options label {
                font-weight: 400;
                display: flex;
                align-items: center;
                gap: 8px;
                margin-bottom: 0;
            }

        .info-box {
            background: #fafafa;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 18px;
        }

            .info-box p:last-child {
                margin-bottom: 0;
            }

        ul {
            margin-top: 8px;
            padding-left: 20px;
        }

        .signature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-top: 20px;
        }

        .error-message {
            color: #c62828;
            font-size: 13px;
            margin-top: 6px;
            display: none;
        }

        .input-error {
            border: 1px solid #c62828 !important;
            background: #fff5f5;
        }

        .group-error {
            border: 1px solid #c62828;
            border-radius: 8px;
            padding: 10px;
            background: #fff5f5;
        }

        .note {
            font-size: 13px;
            color: #555;
            margin-top: 8px;
        }

        .actions {
            margin-top: 34px;
            display: flex;
            gap: 12px;
            justify-content: center;
        }

        button {
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            cursor: pointer;
        }

        .primary {
            background: #1f5f8b;
            color: #fff;
        }

            .primary:disabled {
                background: #9aa8b3;
                cursor: not-allowed;
                opacity: 0.75;
            }

        .secondary {
            background: #e5e5e5;
            color: #222;
        }

        @media (max-width: 768px) {
            .grid-2,
            .grid-3,
            .grid-4,
            .signature-grid {
                grid-template-columns: 1fr;
            }

            .container {
                margin: 16px;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <form id="alsAdditionalForms" action="#" method="post" novalidate>
            <h1>Arlington Life Shelter Additional Forms</h1>

            <div class="section">
                <h2>Background Verification Release Form</h2>

                <div class="grid grid-2">
                    <div>
                        <label for="agency_date">Date *</label>
                        <input type="date" id="agency_date" name="agency_date" data-required="true" />
                        <div class="error-message">Date is required.</div>
                    </div>

                    <div>
                        <label for="agency_name">Agency Name *</label>
                        <input type="text" id="agency_name" name="agency_name" data-required="true" />
                        <div class="error-message">Agency name is required.</div>
                    </div>

                    <div class="full">
                        <label for="contact_name">Contact Name *</label>
                        <input type="text" id="contact_name" name="contact_name" data-required="true" />
                        <div class="error-message">Contact name is required.</div>
                    </div>

                    <div>
                        <label for="agency_phone">Agency's Main Phone Number *</label>
                        <input type="tel" id="agency_phone" name="agency_phone" data-required="true" />
                        <div class="error-message">Agency main phone number is required.</div>
                    </div>

                    <div>
                        <label for="agency_fax">Agency's Fax Number</label>
                        <input type="tel" id="agency_fax" name="agency_fax" />
                    </div>
                </div>

                <div class="grid grid-2" style="margin-top: 22px;">
                    <div>
                        <label for="applicant_full_name">Applicant Full Name (Last, First, MI) *</label>
                        <input type="text" id="applicant_full_name" name="applicant_full_name" data-required="true" />
                        <div class="error-message">Applicant full name is required.</div>
                    </div>

                    <div>
                        <label for="other_names_used">Maiden or Other Name(s) Used</label>
                        <input type="text" id="other_names_used" name="other_names_used" />
                    </div>

                    <div class="full">
                        <label for="current_address">Current Address *</label>
                        <input type="text" id="current_address" name="current_address" data-required="true" />
                        <div class="error-message">Current address is required.</div>
                    </div>

                    <div>
                        <label for="city">City *</label>
                        <input type="text" id="city" name="city" data-required="true" />
                        <div class="error-message">City is required.</div>
                    </div>

                    <div>
                        <label for="state">State *</label>
                        <input type="text" id="state" name="state" data-required="true" />
                        <div class="error-message">State is required.</div>
                    </div>

                    <div>
                        <label for="zip_code">Zip Code *</label>
                        <input type="text" id="zip_code" name="zip_code" data-required="true" />
                        <div class="error-message">Zip code is required.</div>
                    </div>

                    <div>
                        <label for="county">County *</label>
                        <input type="text" id="county" name="county" data-required="true" />
                        <div class="error-message">County is required.</div>
                    </div>

                    <div>
                        <label for="ssn">Social Security Number *</label>
                        <input type="text" id="ssn" name="ssn" data-required="true" />
                        <div class="error-message">Social Security number is required.</div>
                    </div>

                    <div>
                        <label for="dob">Date of Birth *</label>
                        <input type="date" id="dob" name="dob" data-required="true" />
                        <div class="error-message">Date of birth is required.</div>
                    </div>

                    <div>
                        <label for="drivers_license">Driver's License Number *</label>
                        <input type="text" id="drivers_license" name="drivers_license" data-required="true" />
                        <div class="error-message">Driver's license number is required.</div>
                    </div>

                    <div>
                        <label for="state_issued">State Issued *</label>
                        <input type="text" id="state_issued" name="state_issued" data-required="true" />
                        <div class="error-message">State issued is required.</div>
                    </div>

                    <div>
                        <label for="position_applied_for">Position Applied For *</label>
                        <input type="text" id="position_applied_for" name="position_applied_for" data-required="true" />
                        <div class="error-message">Position applied for is required.</div>
                    </div>

                    <div>
                        <label for="contact_phone_number">Contact Phone Number *</label>
                        <input type="tel" id="contact_phone_number" name="contact_phone_number" data-required="true" />
                        <div class="error-message">Contact phone number is required.</div>
                    </div>

                    <div>
                        <label for="email_address">Email Address *</label>
                        <input type="email" id="email_address" name="email_address" data-required="true" />
                        <div class="error-message">A valid email address is required.</div>
                    </div>
                </div>

                <div class="grid grid-2" style="margin-top: 22px;">
                    <div>
                        <label>Gender *</label>
                        <div class="inline-options" id="genderGroup">
                            <label><input type="radio" name="gender" value="Male" /> Male</label>
                            <label><input type="radio" name="gender" value="Female" /> Female</label>
                        </div>
                        <div class="error-message" id="genderError">Please select a gender.</div>
                    </div>

                    <div>
                        <label>Race *</label>
                        <div class="inline-options" id="raceGroup">
                            <label><input type="radio" name="race" value="African American" /> African American</label>
                            <label><input type="radio" name="race" value="American Indian" /> American Indian</label>
                            <label><input type="radio" name="race" value="Anglo" /> Anglo</label>
                            <label><input type="radio" name="race" value="Asian" /> Asian</label>
                            <label><input type="radio" name="race" value="Hispanic" /> Hispanic</label>
                            <label><input type="radio" name="race" value="Other" /> Other</label>
                        </div>
                        <div class="error-message" id="raceError">Please select a race.</div>
                    </div>
                </div>

                <div class="info-box" style="margin-top: 22px;">
                    <p>
                        The organization may request a comprehensive review of your background information from a consumer reporting agency
                        in connection with your employment/volunteer process, including promotion, demotion, reassignment, retention,
                        or volunteer placement. These reports may include consumer records and/or investigative consumer reports.
                    </p>
                    <p>
                        The scope of the consumer report/consumer investigative report may include, but is not limited to, consumer credit,
                        names and dates of previous/current employment, workers’ compensation claims, criminal history records, motor vehicle records,
                        educational verification, license verification, civil cases, OIG/GSA/OFAC/patriot act, sanctions lists, fingerprinting,
                        and drug testing.
                    </p>
                    <p>
                        Authorization and Release: I authorize the complete release of records or data pertaining to me which an individual,
                        organization, firm, corporation, institution, school or university, law enforcement or public agency may have.
                        I authorize the full release of the information described above, without any reservation, throughout any duration of my
                        employment/volunteering at the organization.
                    </p>
                    <p>
                        I release all persons or entities from liability from any alleged damage that may result from furnishing accurate information
                        in good faith to the organization. I certify that all information provided below is true and accurate to the best of my knowledge.
                        This authorization and consent shall be valid in original, facsimile (fax), or copy form.
                    </p>
                    <p>
                        The following information is required by law enforcement agencies and other entities for identification purposes when checking records.
                        It is confidential and will not be used for any other purpose.
                    </p>
                </div>

                <div class="signature-grid">
                    <div>
                        <label for="bg_signature">Applicant's Signature *</label>
                        <input type="text" id="bg_signature" name="bg_signature" data-required="true" />
                        <div class="error-message">Applicant signature is required.</div>
                    </div>

                    <div>
                        <label for="bg_date">Date *</label>
                        <input type="date" id="bg_date" name="bg_date" data-required="true" />
                        <div class="error-message">Date is required.</div>
                    </div>

                    <div></div>

                    <div>
                        <label for="bg_printed_name">Applicant's Printed Name *</label>
                        <input type="text" id="bg_printed_name" name="bg_printed_name" data-required="true" />
                        <div class="error-message">Applicant printed name is required.</div>
                    </div>

                    <div>
                        <label for="parent_guardian_signature">Parent/Guardian's Signature (if under 18 years of age)</label>
                        <input type="text" id="parent_guardian_signature" name="parent_guardian_signature" />
                    </div>
                </div>
            </div>

            <div class="section">
                <h2>Summary of Rights Under the Fair Credit Reporting Act</h2>
                <div class="info-box">
                    <p>
                        This page appears informational only. No fillable signature fields were visible on the uploaded page.
                    </p>
                </div>
            </div>

            <div class="section">
                <h2>Conduct Guidelines Acknowledgment</h2>

                <div class="info-box">
                    <p>
                        I understand that violation of one or more of these guidelines for conduct may result in the termination
                        of all volunteer activities at the Arlington Life Shelter.
                    </p>
                </div>

                <div class="signature-grid">
                    <div>
                        <label for="conduct_signature">Signature *</label>
                        <input type="text" id="conduct_signature" name="conduct_signature" data-required="true" />
                        <div class="error-message">Signature is required.</div>
                    </div>

                    <div>
                        <label for="conduct_printed_name">Printed Name *</label>
                        <input type="text" id="conduct_printed_name" name="conduct_printed_name" data-required="true" />
                        <div class="error-message">Printed name is required.</div>
                    </div>

                    <div>
                        <label for="conduct_date">Date *</label>
                        <input type="date" id="conduct_date" name="conduct_date" data-required="true" />
                        <div class="error-message">Date is required.</div>
                    </div>
                </div>
            </div>

            <div class="section">
                <h2>Religious Activities Guidelines</h2>

                <div class="info-box">
                    <p>
                        Group leaders are required to sign that they have read these guidelines and will share them with their group members
                        prior to providing service at the Arlington Life Shelter.
                    </p>
                    <ul>
                        <li>Participation in religious activities is optional for residents.</li>
                        <li>Activities must end by 9:00 p.m. unless an approved exception has been granted.</li>
                        <li>The planned activity and group participants must remain in the designated area.</li>
                        <li>Hallways and room entrances are to remain open and clear for passage.</li>
                        <li>All faith-oriented activities should be “middle of the road.”</li>
                        <li>Laying on of hands, anointing, laying on the floor, speaking in tongues, etc. is not appropriate.</li>
                        <li>Faith messages should be positive in nature and presented as opinions.</li>
                        <li>Negative, condescending, belligerent, or forced opinions will not be tolerated.</li>
                        <li>No amplifiers, microphones, speakers, or loud equipment may be used.</li>
                        <li>Participatory activities using music, singing, drama, and puppetry are greatly encouraged.</li>
                        <li>Interaction with residents is greatly encouraged.</li>
                        <li>
                            Written information can be placed on tables for residents to pick up as they desire.
                            Materials cannot be directly distributed to residents not participating in the activity.
                        </li>
                    </ul>
                    <p>
                        I have read and understand the religious guidelines set forth above. I agree that all of my group members
                        will abide by these guidelines during our services to the residents of the Arlington Life Shelter and understand
                        that a lack of adherence to the guidelines could result in cancellation of the activity.
                    </p>
                </div>

                <div class="signature-grid">
                    <div>
                        <label for="religious_signature">Signature *</label>
                        <input type="text" id="religious_signature" name="religious_signature" data-required="true" />
                        <div class="error-message">Signature is required.</div>
                    </div>

                    <div>
                        <label for="religious_printed_name">Printed Name *</label>
                        <input type="text" id="religious_printed_name" name="religious_printed_name" data-required="true" />
                        <div class="error-message">Printed name is required.</div>
                    </div>

                    <div>
                        <label for="religious_date">Date *</label>
                        <input type="date" id="religious_date" name="religious_date" data-required="true" />
                        <div class="error-message">Date is required.</div>
                    </div>
                </div>
            </div>

            <div class="actions">
                <button type="submit" class="primary" id="submitBtn" disabled>Submit Forms</button>
                <button type="reset" class="secondary">Reset</button>
            </div>
        </form>
    </div>

    <script>
        const form = document.getElementById("alsAdditionalForms");
        const submitBtn = document.getElementById("submitBtn");
        const requiredFields = form.querySelectorAll("[data-required='true']");
        const genderRadios = form.querySelectorAll("input[name='gender']");
        const raceRadios = form.querySelectorAll("input[name='race']");

        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.trim());
        }

        function showFieldError(field, message = null) {
            field.classList.add("input-error");
            const error = field.parentElement.querySelector(".error-message");
            if (error) {
                if (message) error.textContent = message;
                error.style.display = "block";
            }
        }

        function hideFieldError(field) {
            field.classList.remove("input-error");
            const error = field.parentElement.querySelector(".error-message");
            if (error) error.style.display = "none";
        }

        function validateField(field) {
            const value = field.value.trim();

            if (!value) {
                showFieldError(field);
                return false;
            }

            if (field.type === "email" && !isValidEmail(value)) {
                showFieldError(field, "Enter a valid email address.");
                return false;
            }

            hideFieldError(field);
            return true;
        }

        function validateRadioGroup(radios, groupId, errorId) {
            const checked = Array.from(radios).some(r => r.checked);
            const group = document.getElementById(groupId);
            const error = document.getElementById(errorId);

            if (!checked) {
                group.classList.add("group-error");
                error.style.display = "block";
                return false;
            } else {
                group.classList.remove("group-error");
                error.style.display = "none";
                return true;
            }
        }

        function isFormComplete() {
            let fieldsValid = true;

            requiredFields.forEach(field => {
                const value = field.value.trim();
                if (!value) {
                    fieldsValid = false;
                } else if (field.type === "email" && !isValidEmail(value)) {
                    fieldsValid = false;
                }
            });

            const genderValid = Array.from(genderRadios).some(r => r.checked);
            const raceValid = Array.from(raceRadios).some(r => r.checked);

            return fieldsValid && genderValid && raceValid;
        }

        function updateSubmitButton() {
            submitBtn.disabled = !isFormComplete();
        }

        requiredFields.forEach(field => {
            field.addEventListener("input", () => {
                validateField(field);
                updateSubmitButton();
            });

            field.addEventListener("blur", () => {
                validateField(field);
                updateSubmitButton();
            });

            field.addEventListener("change", () => {
                validateField(field);
                updateSubmitButton();
            });
        });

        [...genderRadios, ...raceRadios].forEach(radio => {
            radio.addEventListener("change", () => {
                validateRadioGroup(genderRadios, "genderGroup", "genderError");
                validateRadioGroup(raceRadios, "raceGroup", "raceError");
                updateSubmitButton();
            });
        });

        form.addEventListener("submit", function (e) {
            let isValid = true;

            requiredFields.forEach(field => {
                if (!validateField(field)) isValid = false;
            });

            if (!validateRadioGroup(genderRadios, "genderGroup", "genderError")) {
                isValid = false;
            }

            if (!validateRadioGroup(raceRadios, "raceGroup", "raceError")) {
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault();
            }
        });

        form.addEventListener("reset", function () {
            setTimeout(() => {
                requiredFields.forEach(field => hideFieldError(field));

                document.getElementById("genderGroup").classList.remove("group-error");
                document.getElementById("raceGroup").classList.remove("group-error");
                document.getElementById("genderError").style.display = "none";
                document.getElementById("raceError").style.display = "none";

                updateSubmitButton();
            }, 0);
        });

        updateSubmitButton();
    </script>

    <?php echo $footer ?>
</body>

</html>