package Java;
import java.util.ArrayList;
import java.util.Map;

    class UberVan extends Car {
        Map<String, Map<String,Integer>> typeCarAccepted;
        ArrayList<String> seatsMaterial;
        public UberVan(String license, Account driver, Map<String, Map<String,Integer>> typeCarAccepted, ArrayList<String> seatsMaterial){
            super(license, driver);
            this.typeCarAccepted = typeCarAccepted;
            this.seatsMaterial = seatsMaterial;
    
        }

        public UberVan(String license, Account driver){
            super(license, driver);
        }

        @Override
        public void setPassengers(Integer passengers) {
            // TODO Auto-generated method stub
            if(passengers == 6){
            }else{
                System.out.println("Necesitas asignar 4 pasajeros");
            }
        }
    }
    
