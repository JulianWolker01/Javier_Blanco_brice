package com.example.login;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    private Button btn1;
    private EditText editText1;
    private EditText editText2;
    private TextView login;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        btn1 = (Button) findViewById(R.id.btn1);
        editText1 = (EditText) findViewById(R.id.editText1);
        editText2 = (EditText) findViewById(R.id.editText2);
        login = (TextView) findViewById(R.id.login);

        String Usuario = "pepe12";
        String Contrasena = "46646513";

        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {

                if (editText1.getText().toString().equals(Usuario) && editText2.getText().toString().equals(Contrasena)){

                    Intent IRCALC = new Intent(getApplicationContext(),Botones.class);
                    startActivity(IRCALC);
                }


            }
        });

    }
}