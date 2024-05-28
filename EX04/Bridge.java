public class Bridge {
    public static void main(String[] args) {
        Tv tv = new Tv(); // Cria o objeto TV
        Radio radio = new Radio(); // Cria o objeto Rádio
        BasicRemote basicRemote = new BasicRemote(tv); // Cria o controle remoto básico
        AdvancedRemote advancedRemote = new AdvancedRemote(radio); // Cria o controle remoto avançado

        basicRemote.powerOn(); // Liga TV
        basicRemote.setChannel(10); // Canal 10
        basicRemote.powerOff(); // Desliga TV

        advancedRemote.powerOn(); // Liga rádio
        advancedRemote.setChannel(102); // Estação 102
        advancedRemote.powerOff(); // Desliga rádio
    }
}
