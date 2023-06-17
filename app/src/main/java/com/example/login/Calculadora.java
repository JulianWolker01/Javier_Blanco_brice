package com.example.login;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class Calculadora extends AppCompatActivity {

    private EditText editTex1;
    private EditText editTex2;
    private TextView textViewresultado;

    private Button   BotonV1;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_calculadora);

        editTex1 = (EditText) findViewById(R.id.editText11);
        editTex2 = (EditText) findViewById(R.id.editText12);

        textViewresultado = findViewById(R.id.textView2);

        BotonV1 = (Button) findViewById(R.id.botonV1);
        BotonV1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                Intent volver1 = new Intent(getApplicationContext(),Botones.class);
                startActivity(volver1);
            }
        });

    }

    public void suma(View view) {
        double operacion = Double.parseDouble(editTex1.getText().toString()) + Double.parseDouble(editTex2.getText().toString());
        textViewresultado.setText(operacion + "");
    }

    public void resta(View view) {
        double operacion = Double.parseDouble(editTex1.getText().toString()) - Double.parseDouble(editTex2.getText().toString());
        textViewresultado.setText(operacion + "");
    }

    public void multiplicacion(View view) {
        double operacion = Double.parseDouble(editTex1.getText().toString()) * Double.parseDouble(editTex2.getText().toString());
        textViewresultado.setText(operacion + "");
    }

    public void divicion(View view) {
        double operacion = Double.parseDouble(editTex1.getText().toString()) / Double.parseDouble(editTex2.getText().toString());
        textViewresultado.setText(operacion + "");
    }

}