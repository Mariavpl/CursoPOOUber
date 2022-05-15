from car import Car

class UberPool(Car):
    barnd = str
    model =str

    def __init__(self, license, driver, brand, model):
        super().__init__(license, driver)
        self.brand = brand
        self.model = model