<?php include 'include.php'; ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Confidentiality & Conduct Agreement</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }

        h1, h2 {
            text-align: center;
            margin-top: 0;
        }

        .section {
            margin-top: 30px;
            border-top: 1px solid #ddd;
            padding-top: 20px;
        }

        .info-box {
            background: #fafafa;
            border: 1px solid #ddd;
            padding: 18px;
            border-radius: 10px;
        }

        ul {
            padding-left: 20px;
        }

        .signature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-top: 20px;
        }

        label {
            font-weight: 600;
            display: block;
            margin-bottom: 6px;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #bbb;
        }

        .error-message {
            color: #c62828;
            font-size: 13px;
            display: none;
        }

        .input-error {
            border: 1px solid #c62828 !important;
            background: #fff5f5;
        }

        .actions {
            margin-top: 30px;
            text-align: center;
        }

        button {
            padding: 12px 20px;
            border-radius: 8px;
            border: none;
            font-size: 15px;
            cursor: pointer;
        }

        .primary {
            background: #1f5f8b;
            color: white;
        }

            .primary:disabled {
                background: #9aa8b3;
                cursor: not-allowed;
            }
    </style>
</head>
<body>

    <div class="container">
        <form id="confForm" novalidate>

            <h1>Pledge of Confidentiality</h1>

            <div class="info-box">
                <p>
                    I understand that I will learn personal information about agency clients and other volunteers.
                    This information must be held in strict confidence and not shared outside authorized staff.
                </p>

                <p><strong>Confidentiality Policy:</strong></p>
                <ul>
                    <li>All client, donor, volunteer, and staff information is confidential.</li>
                    <li>Records and documents are confidential.</li>
                    <li>Information may only be shared with authorized personnel.</li>
                    <li>Outside requests are referred to the Administrative Manager.</li>
                    <li>Violation may result in disciplinary action.</li>
                </ul>

                <p>
                    I agree to maintain confidentiality and understand violation may result in termination.
                </p>
            </div>

            <div class="signature-grid">
                <div>
                    <label>Signature *</label>
                    <input type="text" id="signature" data-required="true" />
                    <div class="error-message">Required</div>
                </div>

                <div>
                    <label>Printed Name *</label>
                    <input type="text" id="name" data-required="true" />
                    <div class="error-message">Required</div>
                </div>

                <div>
                    <label>Date *</label>
                    <input type="date" id="date" data-required="true" />
                    <div class="error-message">Required</div>
                </div>
            </div>

            <div class="section">
                <h2>Conduct Acknowledgment</h2>

                <div class="info-box">
                    <p>
                        I understand that violation of one or more conduct guidelines may result in termination
                        of all volunteer activities at Arlington Life Shelter.
                    </p>
                </div>

                <div class="signature-grid">
                    <div>
                        <label>Signature *</label>
                        <input type="text" id="conduct_signature" data-required="true" />
                        <div class="error-message">Required</div>
                    </div>

                    <div>
                        <label>Printed Name *</label>
                        <input type="text" id="conduct_name" data-required="true" />
                        <div class="error-message">Required</div>
                    </div>

                    <div>
                        <label>Date *</label>
                        <input type="date" id="conduct_date" data-required="true" />
                        <div class="error-message">Required</div>
                    </div>
                </div>
            </div>

            <div class="actions">
                <button type="submit" id="submitBtn" class="primary" disabled>Submit</button>
            </div>

        </form>
    </div>

    <script>
        const form = document.getElementById("confForm");
        const submitBtn = document.getElementById("submitBtn");
        const fields = form.querySelectorAll("[data-required='true']");

        function showError(field) {
            field.classList.add("input-error");
            field.nextElementSibling.style.display = "block";
        }

        function hideError(field) {
            field.classList.remove("input-error");
            field.nextElementSibling.style.display = "none";
        }

        function validateField(field) {
            if (!field.value.trim()) {
                showError(field);
                return false;
            }
            hideError(field);
            return true;
        }

        function isFormComplete() {
            return Array.from(fields).every(f => f.value.trim());
        }

        function updateButton() {
            submitBtn.disabled = !isFormComplete();
        }

        fields.forEach(field => {
            field.addEventListener("input", () => {
                validateField(field);
                updateButton();
            });

            field.addEventListener("blur", () => validateField(field));
        });

        form.addEventListener("submit", e => {
            let valid = true;

            fields.forEach(field => {
                if (!validateField(field)) valid = false;
            });

            if (!valid) e.preventDefault();
        });

        updateButton();
    </script>

    <?php echo $footer ?>
</body>
</html>