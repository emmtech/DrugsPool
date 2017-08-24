package com.example.android.drugcure;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.widget.ArrayAdapter;
import android.widget.AutoCompleteTextView;

public class MainActivity extends AppCompatActivity {
    AutoCompleteTextView suggest;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        // create text auto complete
        ArrayAdapter<String> adapter = new ArrayAdapter<String>(this,
                android.R.layout.simple_dropdown_item_1line, COUNTRIES);
        suggest = (AutoCompleteTextView)
                findViewById(R.id.search);
        suggest.setThreshold(1);
        suggest.setAdapter(adapter);
    }
    // Array of the drugs in stock
    private static final String[] COUNTRIES = new String[] {
            "Chloroquine", "Amodiaquine", "Pyrimethamine", "Proguanil", "Sulfonamides", "Mefloquine",
            "Atovaquone", "Primaquine", "Artemisinin", "Halofantrine", "Doxycycline", "Clindamycin",
    };
    // Method to get text from search box.
    public String autoSuggest(){
        return suggest.getText().toString();
    }
}
