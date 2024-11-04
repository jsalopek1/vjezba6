<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
    <h3>Kalkulator (Switch naredba)</h3>
    
    <form method="post">
        <label for="firstNumber">Upiši prvi broj*</label>
        <input type="number" name="firstNumber" id="firstNumber" required><br><br>

        <label for="secondNumber">Upiši drugi broj*</label>
        <input type="number" name="secondNumber" id="secondNumber" required><br><br>

        <button type="submit" name="operation" value="+">+</button>
        <button type="submit" name="operation" value="-">-</button>
        <button type="submit" name="operation" value="*">*</button>
        <button type="submit" name="operation" value="/">/</button>
    </form>

    <p id="rezultat">
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $num1 = $_POST['firstNumber'];
                $num2 = $_POST['secondNumber'];
                $operation = $_POST['operation'];
                $rezultat = '';

                switch ($operation) {
                    case '+':
                        $rezultat = $num1 + $num2;
                        break;
                    case '-':
                        $rezultat = $num1 - $num2;
                        break;
                    case '*':
                        $rezultat = $num1 * $num2;
                        break;
                    case '/':
                        if ($num2 != 0) {
                            $rezultat = $num1 / $num2;
                        } else {
                            $rezultat = 'Error: Division by zero';
                        }
                        break;
                    default:
                        $rezultat = 'Invalid operation';
                }

                echo "Rezultat: $rezultat";
            }
        ?>
    </p>

    <!-- vježba 6 - Kalkulator -->
</body>
</html>
