<h1>Agenda de aniversário</h1>
<h2>Qual sua data de nascimento?</h2>

<select>
    <option Selected> -- Selecione o dia -- </option>
        <?php

            for ($dia = 1; $dia <= 31; $dia++) {
                echo "<option>{$dia}</option>";
            }
        ?>

</select>

<select>
    <option Selected> -- Selecione o mês -- </option>
        <?php

            for ($mes = 1; $mes <= 12; $mes++) {
                echo "<option>{$mes}</option>";
            };
        ?>

</select>

<select>
    <option Selected> -- Selecione o Ano -- </option>
        <?php

            for ($ano = 2022; $ano >= 1900; $ano--) {
                echo "<option>{$ano}</option>";
            }
        ?>

</select>
<button>Enviar</button>