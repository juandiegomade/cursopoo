class Car:
    id = int
    license = str
    driver = str
    passengers = int

    def __init__(self, license, driver):
        self.license    = license
        self.driver     = driver