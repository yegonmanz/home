<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multipurpose Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        .calculator {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .calculator input, .calculator select, .calculator button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="calculator">
    <h1>Multipurpose Calculator</h1>
    <form action="calculator.php" method="POST">
        <input type="number" name="number1" placeholder="Enter first number" required>
        <input type="number" name="number2" placeholder="Enter second number" required>
        <select name="operation">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (×)</option>
            <option value="divide">Division (÷)</option>
            <option value="exponentiation">Exponentiation (^)</option>
            <option value="percentage">Percentage (%)</option>
            <option value="sqrt">Square Root (√)</option>
            <option value="log">Logarithm (log)</option>
        </select>
        <button type="submit">Calculate</button>
    </form>
    <?php if (isset($_GET['result'])): ?>
        <h2>Result: <?php echo htmlspecialchars($_GET['result']); ?></h2>
    <?php endif; ?>
</div>

</body>
</html>
