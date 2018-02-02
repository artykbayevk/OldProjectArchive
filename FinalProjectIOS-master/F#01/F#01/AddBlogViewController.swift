//
//  AddBlogViewController.swift
//  F#01
//
//  Created by Kamalkhan Artykbayev on 19.04.16.
//  Copyright © 2016 Kamalkhan Artykbayev. All rights reserved.
//

import UIKit
import CoreData

class AddBlogViewController: UIViewController,UIPickerViewDelegate,UIPickerViewDataSource {
var pickOption = ["Parashuting", "Cycling", "Snowboarding", "Alpinism", "Camping"]
    
    var AddBlog:Blog!
    var BlogList:[Blog] = []
    @IBOutlet weak var titleInAddBlog: UITextField!
    
    var appDelegate: AppDelegate?
    var managedObjectContext: NSManagedObjectContext?
    @IBOutlet weak var typeInAddBlog: UITextField!
    @IBOutlet weak var textInAddBlog: UITextField!
    @IBOutlet weak var pickerTextField: UITextField!
    @IBOutlet weak var backImage: UIImageView!
    var name:String = ""
    
    override func viewDidLoad() {
        super.viewDidLoad()
        backImage.image = UIImage(named: "back")
        let lightBlur = UIBlurEffect(style: UIBlurEffectStyle.Light)
        let blurView = UIVisualEffectView(effect: lightBlur)
        blurView.frame = backImage.bounds
        backImage.addSubview(blurView)
        let pickerView = UIPickerView()
        
        pickerView.delegate = self
        
        pickerTextField.inputView = pickerView
        
        appDelegate = UIApplication.sharedApplication().delegate as? AppDelegate
        managedObjectContext = appDelegate?.managedObjectContext
        // Do any additional setup after loading the view.
    }

    func numberOfComponentsInPickerView(pickerView: UIPickerView) -> Int {
        return 1
    }
    
    func pickerView(pickerView: UIPickerView, numberOfRowsInComponent component: Int) -> Int {
        return pickOption.count
    }
    
    func pickerView(pickerView: UIPickerView, titleForRow row: Int, forComponent component: Int) -> String? {
        return pickOption[row]
    }
    
    func pickerView(pickerView: UIPickerView, didSelectRow row: Int, inComponent component: Int) {
        pickerTextField.text = pickOption[row]
    }
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    override func preferredStatusBarStyle() -> UIStatusBarStyle {
        
        //LightContent
        return UIStatusBarStyle.LightContent
        
        //Default
        //return UIStatusBarStyle.Default
        
    }
    

    @IBAction func saveBlog(sender: AnyObject) {
        let title = titleInAddBlog.text
        let text = textInAddBlog.text
        let type = typeInAddBlog.text
        
        
        if title == "" || text == ""||type == "" {
            let alertController = UIAlertController(title: "Oops", message: "We can't proceed because one of the fields is blank. Please note that all fields are required.", preferredStyle: UIAlertControllerStyle.Alert)
            alertController.addAction(UIAlertAction(title: "OK", style: UIAlertActionStyle.Default, handler: nil))
            self.presentViewController(alertController, animated: true, completion: nil)
            
            return
        }
        
        
        let fetchRequest = NSFetchRequest(entityName: "Blog")
        do {
            if let result = try managedObjectContext?.executeFetchRequest(fetchRequest) as? [Blog]{
                if BlogList != result{
                    BlogList = result
                }
            }
        }catch{
            print(error)
        }
        
        var count = 0
        
        for i in BlogList{
            if title == i.title{
                count += 1
            }
        }
        if count == 0 {
            if let manageObjectContext = (UIApplication.sharedApplication().delegate as? AppDelegate)?.managedObjectContext{
                AddBlog = NSEntityDescription.insertNewObjectForEntityForName("Blog", inManagedObjectContext: manageObjectContext) as! Blog
                
                AddBlog.title = title
                AddBlog.text = text
                AddBlog.author = name
                AddBlog.date = type
                
                
                do{
                    try manageObjectContext.save()
                    print(AddBlog.title)
                } catch {
                    print(error)
                    return
                }
                
                
            }
            
        }else{
            let alertController = UIAlertController(title: "Oops", message: "Blog with this title was registered", preferredStyle: UIAlertControllerStyle.Alert)
            alertController.addAction(UIAlertAction(title: "OK", style: UIAlertActionStyle.Default, handler: nil))
            self.presentViewController(alertController, animated: true, completion: nil)
            return
        }
        
        
        dismissViewControllerAnimated(true, completion: nil)
        
    }
    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepareForSegue(segue: UIStoryboardSegue, sender: AnyObject?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */

}
