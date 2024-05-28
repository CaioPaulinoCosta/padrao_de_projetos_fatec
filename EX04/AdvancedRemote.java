// Implementação concreta de um controle remoto avançado
public class AdvancedRemote implements Remote {
    protected Device device;

    public AdvancedRemote(Device device) {
        this.device = device;
    }

    @Override
    public void powerOn() {
        System.out.println("Controle remoto avançado: Ligar");
        device.turnOn();
    }

    @Override
    public void powerOff() {
        System.out.println("Controle remoto avançado: Desligar");
        device.turnOff();
    }

    @Override
    public void setChannel(int channel) {
        System.out.println("Controle remoto avançado: Definir canal");
        device.setChannel(channel);
    }
}
