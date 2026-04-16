<?php include 'include.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arlington Life Shelter Volunteer Application</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            color: #222;
            line-height: 1.4;
        }

        .container {
            max-width: 950px;
            margin: 40px auto;
            background: #fff;
            padding: 32px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        h1, h2 {
            margin-top: 0;
            text-align: center;
        }

        .subtitle {
            text-align: center;
            font-style: italic;
            margin-bottom: 24px;
        }

        .section {
            margin-top: 32px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }

        .grid {
            display: grid;
            gap: 16px;
        }

        .grid-2 {
            grid-template-columns: repeat(2, 1fr);
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
        textarea,
        select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #bbb;
            border-radius: 8px;
            font-size: 14px;
        }

        textarea {
            min-height: 90px;
            resize: vertical;
        }

        .inline-options,
        .checkbox-group {
            display: flex;
            flex-wrap: wrap;
            gap: 14px 24px;
            margin-top: 6px;
        }

            .inline-options label,
            .checkbox-group label {
                font-weight: 400;
                display: flex;
                align-items: center;
                gap: 8px;
                margin-bottom: 0;
            }

        .availability-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 12px;
            margin-top: 12px;
        }

        .day-box {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 12px;
            text-align: center;
            background: #fafafa;
        }

            .day-box strong {
                display: block;
                margin-bottom: 8px;
            }

        .waiver-box {
            padding: 18px;
            background: #fafafa;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .signature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-top: 20px;
        }

        .note {
            font-size: 13px;
            color: #555;
        }

        .actions {
            margin-top: 32px;
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
                opacity: 0.7;
            }

        .secondary {
            background: #e5e5e5;
            color: #222;
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

        @media (max-width: 768px) {
            .grid-2,
            .availability-grid,
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
        <form id="volunteerForm" action="#" method="post" novalidate>
            <h1>Volunteer Application</h1>
            <p class="subtitle">
                Arlington Life Shelter’s mission is to promote self-sufficiency by providing shelter,
                employment programs and transitional services for North Texans impacted by homelessness.
            </p>

            <p>
                We encourage the participation of volunteers who support our mission and are willing to contribute.
                The information provided through this form will be kept confidential and will help us determine the
                most satisfying and appropriate volunteer opportunity for you.
            </p>

            <div class="grid grid-2">
                <div>
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" data-required="true" />
                    <div class="error-message">Name is required.</div>
                </div>

                <div>
                    <label for="application_date">Date of Application *</label>
                    <input type="date" id="application_date" name="application_date" data-required="true" />
                    <div class="error-message">Application date is required.</div>
                </div>

                <div class="full">
                    <label for="address">Address *</label>
                    <input type="text" id="address" name="address" data-required="true" />
                    <div class="error-message">Address is required.</div>
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
                    <label for="zip">Zip *</label>
                    <input type="text" id="zip" name="zip" data-required="true" />
                    <div class="error-message">Zip is required.</div>
                </div>

                <div>
                    <label for="phone">Phone *</label>
                    <input type="tel" id="phone" name="phone" data-required="true" />
                    <div class="error-message">Phone is required.</div>
                </div>

                <div>
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" data-required="true" />
                    <div class="error-message">A valid email is required.</div>
                </div>

                <div>
                    <label for="dob">Date of Birth *</label>
                    <input type="date" id="dob" name="dob" data-required="true" />
                    <div class="error-message">Date of birth is required.</div>
                </div>
            </div>

            <div class="section">
                <label>What is the best way to contact you? *</label>
                <div class="inline-options" id="bestContactGroup">
                    <label><input type="checkbox" name="best_contact[]" value="phone" /> Phone call</label>
                    <label><input type="checkbox" name="best_contact[]" value="text" /> Text</label>
                    <label><input type="checkbox" name="best_contact[]" value="email" /> Email</label>
                </div>
                <div class="error-message" id="bestContactError">Select at least one contact method.</div>
            </div>

            <div class="section grid grid-2">
                <div class="full">
                    <label for="hear_about">How did you hear about the shelter? *</label>
                    <input type="text" id="hear_about" name="hear_about" data-required="true" />
                    <div class="error-message">This field is required.</div>
                </div>

                <div class="full">
                    <label for="group_name">Are you volunteering as part of a group? If so, what’s the name of your group?</label>
                    <input type="text" id="group_name" name="group_name" />
                </div>

                <div>
                    <label for="tshirt_size">T-Shirt Size *</label>
                    <input type="text" id="tshirt_size" name="tshirt_size" data-required="true" />
                    <div class="error-message">T-shirt size is required.</div>
                </div>

                <div>
                    <label for="veteran">Are you a Veteran? *</label>
                    <select id="veteran" name="veteran" data-required="true">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    <div class="error-message">Please select an option.</div>
                </div>

                <div>
                    <label for="other_language">Do you speak another language?</label>
                    <input type="text" id="other_language" name="other_language" />
                </div>

                <div class="full">
                    <label for="resident_before">Have you ever been a resident of the Arlington Life Shelter? (Y/N) *</label>
                    <select id="resident_before" name="resident_before" data-required="true">
                        <option value="">Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                    <div class="error-message">Please select an option.</div>
                </div>

                <div class="full">
                    <label for="resident_dates">If yes, when were you a resident (date/s)?</label>
                    <input type="text" id="resident_dates" name="resident_dates" />
                </div>
            </div>

            <div class="section">
                <label>Which of the volunteer activities interest you? *</label>
                <div class="checkbox-group" id="activitiesGroup">
                    <label><input type="checkbox" name="activities[]" value="Food Team/Meal Prep" /> Food Team/Meal Prep</label>
                    <label><input type="checkbox" name="activities[]" value="Kitchen Help" /> Kitchen Help</label>
                    <label><input type="checkbox" name="activities[]" value="Laundry Services" /> Laundry Services</label>
                    <label><input type="checkbox" name="activities[]" value="Shelter Organization" /> Shelter Organization</label>
                    <label><input type="checkbox" name="activities[]" value="Administrative" /> Administrative</label>
                    <label><input type="checkbox" name="activities[]" value="Special Events" /> Special Events</label>
                    <label><input type="checkbox" name="activities[]" value="Fundraising" /> Fundraising</label>
                    <label><input type="checkbox" name="activities[]" value="Training Classes" /> Training Classes</label>
                    <label><input type="checkbox" name="activities[]" value="Food/Donation Pick up" /> Food/Donation Pick up</label>
                    <label><input type="checkbox" name="activities[]" value="Facility Maintenance" /> Facility Maintenance</label>
                    <label><input type="checkbox" name="activities[]" value="Landscape Maintenance" /> Landscape Maintenance</label>
                    <label><input type="checkbox" name="activities[]" value="Security Services" /> Security Services</label>
                </div>
                <div class="error-message" id="activitiesError">Select at least one activity.</div>

                <div style="margin-top: 16px;">
                    <label for="other_activity">Other</label>
                    <input type="text" id="other_activity" name="other_activity" />
                </div>
            </div>

            <div class="section">
                <label>Schedule Availability *</label>
                <p class="note">Select at least one AM or PM option.</p>

                <div class="availability-grid" id="availabilityGroup">
                    <div class="day-box">
                        <strong>Mon</strong>
                        <label><input type="checkbox" name="availability[]" value="Mon AM" /> AM</label><br />
                        <label><input type="checkbox" name="availability[]" value="Mon PM" /> PM</label>
                    </div>
                    <div class="day-box">
                        <strong>Tues</strong>
                        <label><input type="checkbox" name="availability[]" value="Tues AM" /> AM</label><br />
                        <label><input type="checkbox" name="availability[]" value="Tues PM" /> PM</label>
                    </div>
                    <div class="day-box">
                        <strong>Wed</strong>
                        <label><input type="checkbox" name="availability[]" value="Wed AM" /> AM</label><br />
                        <label><input type="checkbox" name="availability[]" value="Wed PM" /> PM</label>
                    </div>
                    <div class="day-box">
                        <strong>Thurs</strong>
                        <label><input type="checkbox" name="availability[]" value="Thurs AM" /> AM</label><br />
                        <label><input type="checkbox" name="availability[]" value="Thurs PM" /> PM</label>
                    </div>
                    <div class="day-box">
                        <strong>Fri</strong>
                        <label><input type="checkbox" name="availability[]" value="Fri AM" /> AM</label><br />
                        <label><input type="checkbox" name="availability[]" value="Fri PM" /> PM</label>
                    </div>
                    <div class="day-box">
                        <strong>Sat</strong>
                        <label><input type="checkbox" name="availability[]" value="Sat AM" /> AM</label><br />
                        <label><input type="checkbox" name="availability[]" value="Sat PM" /> PM</label>
                    </div>
                    <div class="day-box">
                        <strong>Sun</strong>
                        <label><input type="checkbox" name="availability[]" value="Sun AM" /> AM</label><br />
                        <label><input type="checkbox" name="availability[]" value="Sun PM" /> PM</label>
                    </div>
                </div>
                <div class="error-message" id="availabilityError">Select at least one availability option.</div>
            </div>

            <div class="section">
                <div style="margin-bottom: 16px;">
                    <label for="reason">What is your reason for wanting to volunteer with Arlington Life Shelter? *</label>
                    <textarea id="reason" name="reason" data-required="true"></textarea>
                    <div class="error-message">This field is required.</div>
                </div>

                <div>
                    <label for="notes">Additional notes about your schedule or volunteer interests</label>
                    <textarea id="notes" name="notes"></textarea>
                </div>
            </div>

            <div class="section">
                <h2>Waiver of Liability and Hold Harmless</h2>

                <div class="waiver-box">
                    <p>I hereby certify that I am volunteering at the Arlington Life Shelter of my own free will.</p>
                    <p>
                        As a voluntary participant in programs offered and administered by the Arlington Life Shelter,
                        I specifically release the Arlington Life Shelter, its officers, directors and employees from
                        any claims by the undersigned or liabilities to the undersigned of any kind.
                    </p>
                    <p>
                        As a volunteer, I release and hold harmless Arlington Life Shelter and their successors from
                        any and all claims, costs, suits, actions, judgements or expenses upon any damage, loss or
                        injury to me or to my property which may arise as a result of my volunteer activities.
                    </p>
                </div>

                <div class="signature-grid">
                    <div>
                        <label for="signature">Signature *</label>
                        <input type="text" id="signature" name="signature" data-required="true" />
                        <div class="error-message">Signature is required.</div>
                    </div>

                    <div>
                        <label for="printed_name">Printed Name *</label>
                        <input type="text" id="printed_name" name="printed_name" data-required="true" />
                        <div class="error-message">Printed name is required.</div>
                    </div>

                    <div>
                        <label for="waiver_date">Date *</label>
                        <input type="date" id="waiver_date" name="waiver_date" data-required="true" />
                        <div class="error-message">Date is required.</div>
                    </div>
                </div>
            </div>

            <div class="actions">
                <button type="submit" class="primary" id="submitBtn" disabled>Submit Application</button>
                <button type="reset" class="secondary">Reset Form</button>
            </div>
        </form>
    </div>

    <script>
        const form = document.getElementById("volunteerForm");
        const submitBtn = document.getElementById("submitBtn");
        const requiredFields = form.querySelectorAll("[data-required='true']");

        const bestContactCheckboxes = form.querySelectorAll("input[name='best_contact[]']");
        const activityCheckboxes = form.querySelectorAll("input[name='activities[]']");
        const availabilityCheckboxes = form.querySelectorAll("input[name='availability[]']");

        const emailField = document.getElementById("email");

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

        function validateCheckboxGroup(checkboxes, groupId, errorId) {
            const checked = Array.from(checkboxes).some(cb => cb.checked);
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

            const bestContactValid = Array.from(bestContactCheckboxes).some(cb => cb.checked);
            const activitiesValid = Array.from(activityCheckboxes).some(cb => cb.checked);
            const availabilityValid = Array.from(availabilityCheckboxes).some(cb => cb.checked);

            return fieldsValid && bestContactValid && activitiesValid && availabilityValid;
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
        });

        [...bestContactCheckboxes, ...activityCheckboxes, ...availabilityCheckboxes].forEach(cb => {
            cb.addEventListener("change", () => {
                validateCheckboxGroup(bestContactCheckboxes, "bestContactGroup", "bestContactError");
                validateCheckboxGroup(activityCheckboxes, "activitiesGroup", "activitiesError");
                validateCheckboxGroup(availabilityCheckboxes, "availabilityGroup", "availabilityError");
                updateSubmitButton();
            });
        });

        form.addEventListener("submit", function (e) {
            let isValid = true;

            requiredFields.forEach(field => {
                if (!validateField(field)) {
                    isValid = false;
                }
            });

            if (!validateCheckboxGroup(bestContactCheckboxes, "bestContactGroup", "bestContactError")) {
                isValid = false;
            }

            if (!validateCheckboxGroup(activityCheckboxes, "activitiesGroup", "activitiesError")) {
                isValid = false;
            }

            if (!validateCheckboxGroup(availabilityCheckboxes, "availabilityGroup", "availabilityError")) {
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault();
            }
        });

        form.addEventListener("reset", function () {
            setTimeout(() => {
                requiredFields.forEach(field => hideFieldError(field));

                document.getElementById("bestContactGroup").classList.remove("group-error");
                document.getElementById("activitiesGroup").classList.remove("group-error");
                document.getElementById("availabilityGroup").classList.remove("group-error");

                document.getElementById("bestContactError").style.display = "none";
                document.getElementById("activitiesError").style.display = "none";
                document.getElementById("availabilityError").style.display = "none";

                updateSubmitButton();
            }, 0);
        });

        updateSubmitButton();
    </script>

    <?php echo $footer ?>
</body>
</html>